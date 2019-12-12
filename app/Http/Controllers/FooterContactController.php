<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
use App\Project;


class FooterContactController extends Controller
{
    public function create(){
        return view('content.index');
    }
    public function sendMessage(Request $request) {

/*
        $this->validate($request, [
            'name' => 'required|max:15',
            'email' => 'required|email',
            'message' => 'required|max:120'
        ]);
*/

        Mail::send('email.auth-email', [
           'sendmsg' => $request->message
        ], function ($email) use ($request) {
            $email->from($request->email, $request->name);

            $email->to('63bd8139ed-d8e60a@inbox.mailtrap.io')->subject('Contact Message');
        });

        session()->flash('flash_message', 'Your email is send successfully!');

        return redirect()->back();
    }

}
