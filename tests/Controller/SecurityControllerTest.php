<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    private $client;

    public function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testLogin()

    {
        $crawler = $this->client->request('GET', '/login');

        // select the button
        $buttonCrawlerNode = $crawler->selectButton('Connexion !');

        // retrieve the Form object for the form belonging to this button
        $form = $buttonCrawlerNode->form();

        // set values on a form object
        $form['_username'] = 'test@test.fr';
        $form['_password'] = 'Test007';

        // submit the Form object
        $this->client->submit($form);

        // redirection après login
        $crawler = $this->client->followRedirect();
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertSelectorExists('h1', "test");
    }

    public function testLoginAfterBeingLogged()
    {
        // Vérification redirection si déja connecté
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('test@test.fr');
        // simulate $testUser being logged in
        $this->client->loginUser($testUser);
        // test e.g. the profile page
        $this->client->request('GET', '/login');
        $this->assertEquals(true, $this->client->getResponse()->isRedirect('/'));
    }

    public function testAdmin()

    {
        // Vérification redirection si déja connecté
        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('test@test.fr');
        // simulate $testUser being logged in
        $this->client->loginUser($testUser);
        // test e.g. the profile page
        $this->client->request('GET', '/admin');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertSelectorExists('h1', "test");
    }
}
