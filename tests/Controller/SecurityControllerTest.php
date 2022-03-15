<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{

    public function logoutTest()
    {
        $this->clientUser->request('GET', '/logout');
        $response = $this->clientUser->getResponse();
        $this->assertSame(302, $response->getStatusCode());
        $this->clientUser->followRedirect();
        $this->assertSame(200, $this->clientUser->getResponse()->getStatusCode());
    }
}
