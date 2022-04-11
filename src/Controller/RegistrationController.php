<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\RegistrationFormType;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;

class RegistrationController extends AbstractController
{
    private $verifyEmailHelper;
    private $mailer;

    public function __construct(VerifyEmailHelperInterface $helper, MailerInterface $mailer)
    {
        $this->verifyEmailHelper = $helper;
        $this->mailer = $mailer;
    }
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            )
                ->setCreatedAt(new DateTimeImmutable());

            $entityManager->persist($user);
            $entityManager->flush();
            $signatureComponents = $this->verifyEmailHelper->generateSignature(
                'registration_confirmation_route',
                $user->getId(),
                $user->getEmail(),
                ['id' => $user->getId()] // add the user's id as an extra query param
            );
            $email = new TemplatedEmail();
            $email->from('Avamdui.dev@gmail.com');
            $email->to($user->getEmail());
            $email->htmlTemplate('registration/confirmation_email.html.twig');
            $email->context(['signedUrl' => $signatureComponents->getSignedUrl()]);
            $this->mailer->send($email);
            // do anything else you need here, like send an email
            $this->addFlash("success", "Inscription terminé, merci de consulter vos emails");
            return $this->redirectToRoute('registration');
        }


        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/verify", name="registration_confirmation_route")
     */
    public function verifyUserEmail(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $id = $request->get('id'); // retrieve the user id from the url

        // Verify the user id exists and is not null
        if (null === $id) {
            return $this->redirectToRoute('app_home');
        }
        $user = $userRepository->find($id);
        // Ensure the user exists in persistence
        if (null === $user) {
            return $this->redirectToRoute('app_home');
        }

        // Do not get the User's Id or Email Address from the Request object
        try {
            $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getId(), $user->getEmail());
        } catch (VerifyEmailExceptionInterface $e) {
            $this->addFlash('verify_email_error', $e->getReason());

            return $this->redirectToRoute('app_register');
        }

        // Mark your user as verified. e.g. switch a User::verified property to true
        $user->setIsVerified(true);
        $entityManager->persist($user);
        $entityManager->flush();
        $this->addFlash('success', 'Votre adresse e-mail a été vérifiée.');

        return $this->redirectToRoute('homepage');
    }
}
