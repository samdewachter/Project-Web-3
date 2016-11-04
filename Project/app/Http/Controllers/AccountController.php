<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use App\Game;
use App\Review;
use Auth;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    public function index(User $id) {

        $reviews = Review::where('user_id', '=', $id->id)->paginate(3);
        $games = Game::where('user_id', '=', $id->id)->get();

        return view('account.index', compact('id', 'reviews', 'games'));
    }

    public function edit(User $id) {
        return view('account.edit', compact('id'));
    }

    public function update(Request $request, User $id) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'console' => 'required',
            'genre' => 'required',
            'phone' => 'required',
        ]);

        $id->update($request->all());
        return redirect('/account/' . $id->id)->withErrors(['Account succesfully edited']);

    }

    public function addGame()
    {
        return view('account.addgame');
    }

    public function storeGame(Request $request)
    {
        $game = new Game();

        $user = Auth::user();

        $this->validate($request, [
            'name' => 'required',
            'console' => 'required',
            'genre' => 'required',
            'description' => 'required',
        ]);

        if ($request->photoUrlGiant == '') {
            $imageName = $request->file('photoUrl')->getClientOriginalName();

            $imageName = rand(0, 10000) . $imageName;

            $request->file('photoUrl')->move(base_path(). '/public/uploads', $imageName);

            $game->photoUrl = $imageName;            
        }
        else {

            $game->photoUrl = $request->photoUrlGiant;

        }

        $game->name = $request->name;
        $game->genre = $request->genre;
        $game->console = $request->console;
        $game->user_id = $user->id;
        $game->description = $request->description;

        $game->save();

        return redirect('/account/' . $user->id)->withErrors(['Game succesfully added']);
    }

    public function deleteGame(Game $game)
    {
        $game->delete();

        return Redirect::back()->withErrors(['Game succesfully deleted']);
    }
}
