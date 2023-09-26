<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Models\Player;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/get', function () {
    $players = Player::all();
    return view('getPlayers', compact('players'));
});


Route::get('/players', [PlayerController::class, 'index']);
Route::get('/add', [PlayerController::class, 'store']);
