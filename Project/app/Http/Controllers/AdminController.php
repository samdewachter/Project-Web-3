<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Game;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function users()
    {
    	$users = User::paginate(15);
    	return view('admin.users', compact('users'));
    }

    public function games()
    {
    	$games = Game::paginate(15);
    	return view('admin.games', compact('games'));
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return back();
    }

    public function deleteGame(Game $game)
    {
        $game->delete();

        return back();
    }

}
