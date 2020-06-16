<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    public function getUsers () {
        $users = [
            [
                'id' => 1,
                'name' => 'John',
                'phoneNumber' => '45645643453',
                'email' => 'example@example.com',
                'library' => [
                    [
                        'id' => 1,
                        'title' => 'Grand Theft Auto 5',
                        'description' => 'Game about criminals from LS',
                        'price' => 199.99,
                        'logo' => 'gta5.jpeg',
                    ],
                    [
                        'id' => 2,
                        'title' => 'Call of Duty',
                        'description' => 'Game about war',
                        'price' => 249.99,
                        'logo' => 'cod.jpeg',
                    ]
                ]
            ],
            [
                'id' => 2,
                'name' => 'Jack',
                'phoneNumber' => '6656545645',
                'email' => 'example2@example.com',
                'library' => []
            ],
            [
                'id' => 3,
                'name' => 'Kate',
                'phoneNumber' => '435345345',
                'email' => 'example3@example.com',
                'library' => []
            ]
        ];
        return $this->json($users);
    }

    public function getUser1 ($id) {
        $user = [
            'id' => $id,
            'name' => 'Kate',
            'phoneNumber' => '555555555',
            'email' => 'example3@example.com',
            'library' => []
        ];
        return $this->json($user);
    }

    public function createUser () {
        return $this->json('User has been successfully created');
    }

    public function patchUser ($id) {
        return $this->json('User with id '.$id.' has been successfully updated');
    }

    public function deleteUser ($id) {
        return $this->json('User with id '.$id.' has been successfully deleted');
    }
}
