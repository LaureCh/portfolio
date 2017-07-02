<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NavbarControllerTest extends WebTestCase
{
    public function testNav()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

}
