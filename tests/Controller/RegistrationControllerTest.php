<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use SymfonyCasts\Bundle\VerifyEmail\Model\VerifyEmailSignatureComponents;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper;

class RegistrationControllerTest extends WebTestCase
{
    private $client = null;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testRegister()
    {

        $crawler = $this->client->request('GET', '/register');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $buttonCrawlerNode = $crawler->selectButton("S'incrire");
        $form = $buttonCrawlerNode->form();
        $form['registration_form[email]'] = 'test@test.fr';
        $form['registration_form[username]'] = 'test@test.fr';
        $form['registration_form[plainPassword]'] = 'Test007';
        $form['registration_form[plainPassword_confirm]'] = 'Test007';
        $form['registration_form[email]'] = 'test@test.fr';
        $form['registration_form[agreeTerms]']->tick();
        $this->client->submit($form);
        $crawler = $this->client->followRedirect();
        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    }
}
