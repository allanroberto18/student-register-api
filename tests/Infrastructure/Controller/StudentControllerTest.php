<?php
declare(strict_types=1);

namespace Student\Register\Tests\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StudentControllerTest extends WebTestCase
{
    /**
     * Check the requequest
     */
    public function testLoadStudentById(): void
    {
        $client = static::createClient();

        $client->request('GET', '/student/1');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
