<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\User;
use App\Form\TaskType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\TaskRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;

class TaskController extends AbstractController
{
    //-------------------------------------------------CREATION DE TACHES ------------------------------------------------------------------ 
    /**
     * @Route("/tasks/create", name="task_create")
     * @param User $user
     */
    public function createAction(Task $task = null, Request $request, EntityManagerInterface $entityManager)
    {
        $user = $this->getUser();
        $task = new Task();
        if (!$user) {
            return $this->redirectToRoute('homepage');
        }
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $task->setUser($user);
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->redirectToRoute('task_list');
        }

        return $this->render('task/create.html.twig', ['form' => $form->createView()]);
    }
    //-------------------------------------------AFFICHAGE DES TACHES ------------------------------------------------
    /**
     * @Route("/tasks", name="task_list")
     */
    public function listAction(TaskRepository $repo,  UserInterface $user)
    {
        $task_user_list = 0;
        $tasks = $repo->findAll();
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        return $this->render(
            'task/list.html.twig',
            [
                'user' => $user,
                'tasks' => $tasks,
                'form' => $form->createView(),
                'task_user_list' => $task_user_list
            ]
        );
    }

    /**
     * @Route("/tasks/{id}", name="task_user_list")
     * @param User $user
     */
    public function listActionUser(User $user, TaskRepository $repo)
    {
        if ($this->getUser() == $user) {
            $task_user_list = 1;
            $tasks = $repo->findBy(['user' => $this->getUser()]);
            $task = new Task();
            $form = $this->createForm(TaskType::class, $task);
            return $this->render(
                'task/list.html.twig',
                [
                    'user' => $user,
                    'tasks' => $tasks,
                    'form' => $form->createView(),
                    'task_user_list' => $task_user_list
                ]
            );
        }
        return $this->redirectToRoute('task_list');
    }

    //---------------------------------EDITION DUNE TACHE ---------------------------------------------------
    /**
     * @Route("/tasks/{id}/edit", name="task_edit")
     */
    public function editAction(Task $task, Request $request, EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
        }
        return $this->render('task/singleTask.html.twig', [
            'task' => $task,
        ]);
    }
    /**
     * @Route("/tasks/{id}/showedit", name="show_task_edit")
     */
    public function showeditAction(Task $task)
    {
        $form = $this->createForm(TaskType::class, $task);
        $user = $this->getUser();
        if ($task->getUser() == $user) {
            return $this->render('task/edit.html.twig', [
                'form' => $form->createView(),
                'task' => $task,
            ]);
        }
    }
    //--------------------------------------Suppresion d'une tache------------------------------------------------------------
    /**
     * @Route("/tasks/{id}/delete", name="task_delete")
     */
    public function deleteTaskAction(Task $task, EntityManagerInterface $entityManager)
    {
        $user = $this->getUser();
        if ($task->getUser() == $user) {
            $entityManager->remove($task);
            $entityManager->flush();
            return $this->json('ok');
        }
        return $this->json('Modification interdite');
    }
    //--------------------------------------CHANGEMENT DE STATUS POUR LES TACHES--------------------------------------------
    /**
     * @Route("/tasks/{id}/setdone", name="taskdone")
     */
    public function setDone(Task $task, EntityManagerInterface $entityManager)
    {

        if ($task->getStatut() !== 'done') {
            $task->setStatut('done');
        }
        $entityManager->flush();

        return $this->json('ok');
    }
    /**
     * @Route("/tasks/{id}/settodo", name="tasktodo")
     */
    public function setTodo(Task $task, EntityManagerInterface $entityManager)
    {

        if ($task->getStatut() !== 'todo') {
            $task->setStatut('todo');
        }
        $entityManager->flush();

        return $this->json('ok');
    }
    /**
     * @Route("/tasks/{id}/setinprogress", name="taskinprogress")
     */
    public function setInProgress(Task $task, EntityManagerInterface $entityManager)
    {

        if ($task->getStatut() !== 'inprogress') {
            $task->setStatut('inprogress');
        }
        $entityManager->flush();
        return $this->json('ok');
    }
}
