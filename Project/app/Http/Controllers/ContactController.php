<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mail;

class ContactController extends Controller
{
    public function index(){
    	return view('contact.index');
    }

    public function sendMail(Request $request){
    	$this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'contactMessage' => 'required',
        ]);

    	$name = $request->name;

        $emailFrom =  $request->email;

        $contactMessage = $request->contactMessage;

        Mail::send('emails.contact', ['name' => $name, 'emailFrom' => $emailFrom, 'contactMessage' => $contactMessage, ], function ($message)
        {

            $message->from('samdewachter@gmail.com', 'Contact');

            $message->to('samdewachter@hotmail.com');

        });

        return Redirect::back()->withErrors(['Email succesfully send']);
    }
}
