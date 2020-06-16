<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    public function getGames () {
        $games = [
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
            ],
            [
                'id' => 3,
                'title' => 'God of War',
                'description' => 'Game about god of war',
                'price' => 199.99,
                'logo' => 'gow.jpeg',
            ]
        ];
        return $this->json($games);
    }

    public function getUserGames ($userId) {
        $games = [
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
            ],
            [
                'id' => 3,
                'title' => 'God of War',
                'description' => 'Game about god of war',
                'price' => 199.99,
                'logo' => 'gow.jpeg',
            ]
        ];
        return $this->json($games);
    }

    public function getGame ($id) {
        $game = [
            'id' => $id,
            'title' => 'Call of Duty',
            'description' => 'Game about war',
            'price' => 249.99,
            'logo' => 'cod.jpeg',
        ];
        return $this->json($game);
    }

    public function createGame () {
        return $this->json('Game has been successfully created');
    }

    public function patchGame ($id) {
        return $this->json('Game with id '.$id.' has been successfully updated');
    }

    public function deleteGame ($id) {
        return $this->json('Game with id '.$id.' has been successfully deleted');
    }
}
