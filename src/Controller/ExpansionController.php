<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExpansionController extends AbstractController
{
    public function getExpansions () {
        $games = [
            [
                'id' => 1,
                'title' => 'Call of Duty Pets Edition',
                'description' => 'Game about war with pets',
                'price' => 24.99,
                'logo' => 'petscod.jpeg',
                'game' => [
                    'id' => 1,
                    'title' => 'Call of Duty',
                    'description' => 'Game about war',
                    'price' => 249.99,
                    'logo' => 'cod.jpeg',
                ]
            ],
            [
                'id' => 2,
                'title' => 'Call of Duty UFO Edition',
                'description' => 'Game about war with UFO',
                'price' => 2.99,
                'logo' => 'UFOcod.jpeg',
                'game' => [
                    'id' => 1,
                    'title' => 'Call of Duty',
                    'description' => 'Game about war',
                    'price' => 249.99,
                    'logo' => 'cod.jpeg',
                ]
            ],
            [
                'id' => 3,
                'title' => 'Call of Duty Cats Edition',
                'description' => 'Game about war with cats',
                'price' => 25.99,
                'logo' => 'catscod.jpeg',
                'game' => [
                    'id' => 1,
                    'title' => 'Call of Duty',
                    'description' => 'Game about war',
                    'price' => 249.99,
                    'logo' => 'cod.jpeg',
                ]
            ]
        ];
        return $this->json($games);
    }

    public function getGameExpansions ($gameId) {
        $games = [
            [
                'id' => 1,
                'title' => 'Call of Duty Pets Edition',
                'description' => 'Game about war with pets',
                'price' => 24.99,
                'logo' => 'petscod.jpeg',
                'game' => [
                    'id' => $gameId,
                    'title' => 'Call of Duty',
                    'description' => 'Game about war',
                    'price' => 249.99,
                    'logo' => 'cod.jpeg',
                ]
            ]
        ];
        return $this->json($games);
    }

    public function getExpansion ($id) {
        $game = [
            'id' => $id,
            'title' => 'Call of Duty Pets Edition',
            'description' => 'Game about war with pets',
            'price' => 24.99,
            'logo' => 'petscod.jpeg',
            'game' => [
                'id' => $id,
                'title' => 'Call of Duty',
                'description' => 'Game about war',
                'price' => 249.99,
                'logo' => 'cod.jpeg',
            ]
        ];
        return $this->json($game);
    }

    public function createExpansion () {
        return $this->json('Expansion pack has been successfully created');
    }

    public function patchExpansion ($id) {
        return $this->json('Expansion pack with id '.$id.' has been successfully updated');
    }

    public function deleteExpansion ($id) {
        return $this->json('Expansion pack with id '.$id.' has been successfully deleted');
    }
}
