<?php
declare(strict_types=1);

namespace Student\Register\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentController
{
    /**
     * load student By Id
     * @param Request $request
     * @return Response
     */
    public function loadStudentById(Request $request): Response
    {
        $id = $request->get('id');

        $data = [
            'id' => $id,
            'fistName' => '',
            'lastName' => '',
            'middleName' => ''
        ];

        return new Response(json_encode($data), Response::HTTP_OK);
    }
}
