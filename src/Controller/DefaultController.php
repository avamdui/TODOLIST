<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()

    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('login');
        }
        return $this->render(
            'default/index.html.twig',
            [
                'user' => $user
            ]
        );
    }
    /**
     * @Route("/registration", name="registration")
     */
    public function Registration()

    {
        return $this->render(
            'registration/registration.html.twig'
        );
    }
}
