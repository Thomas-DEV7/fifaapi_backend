<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayersTableSeeder extends Seeder
{
    public function run()
    {
        $playersData = [
            [
                'name' => 'Cristiano Ronaldo',
                'url_foto' => 'url_da_foto',
                'over' => 93, // Pontuação do FIFA
                'team' => 'Real Madrid',
                'nationality' => 'Portugal',
                'position' => 'ST',
                'skills' => ['Shooting' => 90, 'Dribbling' => 87, 'Passe' => 91,],
            ],

        ];

        foreach ($playersData as $playerData) {
            Player::create($playerData);
        }
    }
}
