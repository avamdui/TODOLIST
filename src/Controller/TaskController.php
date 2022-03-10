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

class TaskController extends AbstractController
{
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

    /**
     * @Route("/tasks", name="task_list")
     */
    public function listAction(TaskRepository $repo)
    {
        $tasks = $repo->findAll();
        $task = new Task();
        $user = $this->getUser();
        $form = $this->createForm(TaskType::class, $task);
        return $this->render(
            'task/list.html.twig',
            [
                'tasks' => $tasks,
                'form' => $form->createView()
            ]
        );
    }
    /**
     * @Route("/taskskanban", name="task_list_kanban")
     */
    public function listKanbanAction(TaskRepository $repo)
    {
        $tasks = $repo->findAll();
        return $this->render(
            'task/kanban.html.twig',
            [
                'tasks' => $tasks
            ]
        );
    }

    /**
     * @Route("/tasksDone", name="task_done")
     */
    public function listActionDone(TaskRepository $repo)
    {
        $tasks = $repo->findBy(['isDone' =>  true]);
        return $this->render(
            'task/done.html.twig',
            [
                'tasks' => $tasks
            ]
        );
    }

    /**
     * @Route("/tasks/{id}", name="task_user_list")
     * @param User $user
     */
    public function listActionUser(User $user)
    {
        return $this->render(
            'user/taskslist.html.twig',
            [
                'user' => $user
            ]
        );
    }


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
        return $this->redirectToRoute('task_list');
    }

    /**
     * @Route("/tasks/{id}/showedit", name="show_task_edit")
     */
    public function showeditAction(Task $task, Request $request, EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(TaskType::class, $task);
        return $this->render('task/edit.html.twig', [
            'form' => $form->createView(),
            'task' => $task,
        ]);
    }



    /**
     * @Route("/tasks/{id}/toggle", name="task_toggle")
     */
    // public function toggleTaskAction(Task $task, EntityManagerInterface $entityManager)
    // {

    //     $task->toggle(!$task->isDone());
    //     $entityManager->flush();
    //     return $this->json('ok');
    // return $this->render('task/btntoggle.html.twig', [
    //     'task' => $task,
    // ]);
    // }


    /**
     * @Route("/tasks/{id}/delete", name="task_delete")
     */
    public function deleteTaskAction(Task $task, EntityManagerInterface $entityManager)
    {

        $entityManager->remove($task);
        $entityManager->flush();
        return $this->json('ok');
    }

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
