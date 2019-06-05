<?php
declare(strict_types=1);

namespace Student\Register\Tests\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    /**
     * Check if the request is valid
     */
    public function testIndex(): void
    {
        $client = static::createClient();

        $client->request('GET', 'http://127.0.0.1:90/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
