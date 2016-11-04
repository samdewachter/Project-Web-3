<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Review;
use DB;
use Illuminate\Support\Facades\Redirect;
use Auth;

class ProfileController extends Controller
{
    public function index(User $id){
        if (Auth::user()) {
            # code...
        
        if (Auth::user()->id == $id->id) {
            return redirect()->action(
                'AccountController@index', ['user' => $id->id]
            );
        }

        }

        $reviews = Review::where('user_id', '=', $id->id)->orderBy('created_at', 'desc')->paginate(3);

    	return view('profile.index', compact('id', 'reviews'));
    }

    public function addComment(User $id, Request $request){

        $this->validate($request, [
            'text' => 'required',
            'stars' => 'required',
        ]);
     
    	$review = new Review();

    	$review->user_id = $request->user_id;
    	$review->commenter = $id->name;
        $review->commenter_id = $id->id;
    	$review->text =  $request->text;
        $review->stars = $request->stars;

    	$review->save();

    	return Redirect::back()->withErrors(['Review succesfully added']);

    }

    public function tester(){
        return view('profile.test');
    }
}
