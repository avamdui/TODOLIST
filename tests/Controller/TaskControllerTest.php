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
        // Login grace a la fonction loginuser()
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);
        // Nous accèdons à la page "mes taches" de l'user ayant l'ID 1
        $crawler = $this->client->request('GET', '/tasks/1');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        //Recherche du bouton "ajouter"
        $buttonCrawlerNode = $crawler->selectButton("Ajouter");
        // Selection du formulaire associé a ce bouton
        $form = $buttonCrawlerNode->form();
        // On remplis le formulaire
        $form['task[title]'] = 'PHPUNIT';
        $form['task[content]'] = 'Faire les test unitaires';
        //On soumt le formulaire
        $this->client->submit($form);
        // Vérification de la redictection et du code retour 200
        $this->assertTrue($this->client->getResponse()->isRedirect());
        $crawler = $this->client->followRedirect();
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }
    public function testShowEditAction()
    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);
        $crawler = $this->client->request('GET', '/tasks/1/showedit');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }


    public function testSetdone()

    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);
        $this->client->request('GET', 'tasks/1/setdone');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testSettodo()

    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);

        $this->client->request('GET', 'tasks/1/settodo');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }


    public function testSetinprogress()

    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);
        $this->client->request('GET', 'tasks/1/setinprogress');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

    public function testDeleteTaskAction()
    {
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userTest = $userRepository->findOneByEmail('test@test.fr');
        $this->client->loginUser($userTest);
        $this->client->request('GET', '/tasks/2/delete');
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
        $userTest = $userRepository->findOneByEmail('test@test.fr');
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
