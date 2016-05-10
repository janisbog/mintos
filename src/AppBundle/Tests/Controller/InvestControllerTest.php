<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InvestControllerTest extends WebTestCase
{
    public function testInvest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/invest/{loanID}');
    }

}
