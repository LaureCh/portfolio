<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactControllerTest extends WebTestCase
{
    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');
    }

}
