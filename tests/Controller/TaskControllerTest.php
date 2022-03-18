<?php

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


    public function testCreateAction()
    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);

        $crawler = $this->client->request('GET', '/tasks/1');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        $buttonCrawlerNode = $crawler->selectButton("Ajouter");
        $form = $buttonCrawlerNode->form();
        $form['task[title]'] = 'PHPUNIT';
        $form['task[content]'] = 'Faire les test unitaires';
        $this->client->submit($form);

        $this->assertTrue($this->client->getResponse()->isRedirect());
        $crawler = $this->client->followRedirect();
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }



    public function testSettodo()

    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('avamdui@gmail.com');
        $this->client->loginUser($userTest);

        $this->client->request('GET', 'tasks/2/settodo');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testSetdone()

    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('avamdui@gmail.com');
        $this->client->loginUser($userTest);
        $this->client->request('GET', 'tasks/2/setdone');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testSetinprogress()

    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('avamdui@gmail.com');
        $this->client->loginUser($userTest);
        $this->client->request('GET', 'tasks/2/setinprogress');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testDeleteTaskAction()
    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);
        $this->client->request('GET', '/tasks/3/delete');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }


    public function testListActionUser()

    {
        //test si non connecté
        $this->client->request('GET', '/tasks/1');
        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
        $this->client->followRedirect();

        $this->assertSelectorTextContains('h1', "Connexion");
        //test si  connecté
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('avamdui@gmail.com');
        $this->client->loginUser($userTest);
        $this->client->request('GET', '/tasks/1');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertSelectorExists('h1', "MES TACHES");
    }

    public function testListAction()
    {
        $this->client->request('GET', '/tasks');
        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
        $this->client->followRedirect();
        $this->assertSelectorTextContains('h1', "Connexion");
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);
        $this->client->request('GET', '/tasks');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertSelectorExists('h1', "LISTES DES TACHES");
    }
}
