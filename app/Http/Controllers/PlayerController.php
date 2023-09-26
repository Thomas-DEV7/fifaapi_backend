<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return response()->json($players);
    }

    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'name' => 'required|string|max:100',
        //     'url_foto' => 'required|string|max:100',
        //     'over' => 'required|integer|min:0|max:999',
        //     'team' => 'required|string|max:30',
        //     'nationality' => 'required|string|max:25',
        //     'position' => 'required|string|max:3',
        //     'skills' => 'array',
        // ]);
        $data = ([
            'name' => 'Matheus',
            'url_foto' => 'foto',
            'over' => '99',
            'team' => 'Inter DS',
            'nationality' => 'Angola',
            'position' => 'ZG',
            'skills' => 'array',
        ]);
        Player::create($data);
        return ['success', 'Jogador adicionado com sucesso!'];
    }
}
