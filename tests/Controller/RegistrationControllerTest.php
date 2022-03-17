<?php

namespace App\Tests\Controller;

use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    private $client = null;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testIndexAction()
    {
    }
}
