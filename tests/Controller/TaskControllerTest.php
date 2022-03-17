<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    private $client = null;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testListActionUserAnonymous()

    {
        //test si non connecté
        $this->client->request('GET', '/tasks/3');
        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
        $this->client->followRedirect();
        $this->assertRouteSame('login');
    }

    public function testListActionUserConnected()

    {
        //test si  connecté
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('avamdui@gmail.com');
        $this->client->loginUser($userTest);
        $this->client->request('GET', '/tasks/3');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertSelectorExists('h1', "MES TACHES");
    }

    public function testListAction()
    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('avamdui@gmail.com');
        $this->client->loginUser($userTest);
        $this->client->request('GET', '/tasks');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertSelectorExists('h1', "LISTES DES TACHES");
    }

    public function testeEditAction()
    {
    }



    public function testCreateAction()
    {
        // $crawler = $this->client->request('GET', '/');
        // $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        // $link = $crawler->selectLink('Créer une nouvelle tâche')->link();
        // $crawler = $this->client->click($link);
        // $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        // $form = $crawler->selectButton('Ajouter')->form();
        // $form['task[title]'] = 'Ma tâche de test';
        // $form['task[content]'] = 'Plat de pâtes';
        // $this->client->submit($form);

        // $this->assertEquals(302, $this->client->getResponse()->getStatusCode());

        // $this->assertTrue($this->client->getResponse()->isRedirect());
        // $crawler = $this->client->followRedirect();

        // $this->assertSame(1, $crawler->filter('div.alert.alert-success')->count());
        // echo $this->client->getResponse()->getContent();
    }

    public function testDeleteTaskAction()
    {
    }

    public function testSetAction()

    {
        // $task->setStatut('done');
        // $task->setStatut('todo');
        // $task->setStatut('inprogress');
    }
}
