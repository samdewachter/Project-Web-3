<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;
use App\Email;
use DB;
use Mail;
use Auth;
use Input;

use App\Http\Requests;

class BrowseController extends Controller
{
    public function index(Request $request)
    {

    	if (isset($request->con)) {
    	 	$games = Game::where('console', '=', $request->con)->paginate(15);

    	}
    	else {
    		$games = Game::paginate(15);
    	 }



        return view('browse.index', compact('games'));
    }

    public function showGame(Game $id)
    {
    	return view('browse.game', compact('id'));
    }

    public function contactOwner(Game $id)
    {

        $loggedInUser = Auth::user();

        return view('browse.contact', compact('id', 'loggedInUser'));
    }

    public function sendMail(Game $id, Request $request)
    {
        $buyer = Auth::user();

        $buyerName = $buyer->name;
        $buyerEmail = $buyer->email;
        $buyerGameName = $request->buyerGameName;
        $tradePeriod = $request->tradePeriod;

        $sellerGameName = $id->name;
        $sellerName = $id->user->name;

        $emailTo =  'samdewachter@hotmail.com'; //$request->emailTo;

        Mail::send('emails.send', ['buyerName' => $buyerName, 'buyerEmail' => $buyerEmail, 'buyerGameName' => $buyerGameName, 'sellerGameName' => $sellerGameName, 'sellerName' => $sellerName, 'tradePeriod' => $tradePeriod], function ($message) use ($emailTo)
        {

            $message->from('samdewachter@gmail.com', 'Game Trader');

            $message->to($emailTo);

        });

        $email = new Email();

        $email->user_id = $buyer->id;
        $email->sendTo = $request->emailTo;
        $email->profile_id = $id->user->id;
        $email->buyerGameName = $buyerGameName;
        $email->sellerGameName = $sellerGameName;

        $email->save();

        return redirect('browse/game/' . $id->id)->withErrors(['Email succesfully send']);
    
    }

    public function search(Request $request)
    {
        $games = Game::where('description', 'LIKE', '%' . $request->search . '%')->paginate(10);

        // returns a view and passes the view the list of articles and the original query.
        return view('browse.index', compact('games'));
    }

    public function filter()
    {
        $games = Game::where(function ($query)
        {
            $consoles = Input::has('consoles') ? Input::get('consoles') : null;
            $genres = Input::has('genres') ? Input::get('genres') : null;

            if (isset($consoles) || isset($genres) ) {

                if (isset($consoles) && isset($genres)) {
                    foreach ($consoles as $console) {
                        foreach ($genres as $genre) {
                            $query->orWhere('console','=', $console);
                            $query->Where('genre','=', $genre);
                        }
                        
                    }
                }

                if (isset($genres) && !isset($consoles)) {
                    foreach ($genres as $genre) {
                        $query->orWhere('genre','=', $genre);
                    }
                }

                if (isset($consoles) && !isset($genres)) {
                    foreach ($consoles as $console) {
                        $query->orWhere('console','=', $console);
                    }
                }

            }
            // $games = Game::where('description', 'LIKE', '%' . $request->search . '%')->paginate(10);
  
        })->paginate(15);


        // returns a view and passes the view the list of articles and the original query.
        return view('browse.index', compact('games'));
    }
}
