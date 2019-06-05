<?php

namespace Student\Register\Infrastructure\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractFOSRestController {

    public function index(): Response
    {
        $data = [
            'classes'   => ''
        ];

        return new Response(
            json_encode($data), 200
        );
    }
}
