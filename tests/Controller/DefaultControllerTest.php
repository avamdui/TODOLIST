<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    private $client = null;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testIndexAction()
    {
        $this->client->request('GET', '/');
        $this->client->followRedirect();
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', "Connexion");

        $userRepository = static::getContainer()->get(UserRepository::class);
        // retrieve the test user
        $testUser = $userRepository->findOneByEmail('test@test.fr');
        // simulate $testUser being logged in
        $this->client->loginUser($testUser);
        // test e.g. the profile page
        $this->client->request('GET', '/');
        $this->assertSelectorTextContains('h1', "Bienvenue test");
    }
    public function testRegistrationAction()
    {
        $this->client->request('GET', '/registration');
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', "Bienvenu");
    }
}
