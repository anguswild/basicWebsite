<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
  public function submit(Request $request){
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required'
    ]);
    //Create a new Message
    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('message');
    //Save Message
    $message->save();
    //Redirect
    return redirect('/')->with('success', 'Message Send');
  }

  public function getMessages(){
    //get all Messages
    $messages = Message::all();
    //Send messages to messages view
    return view('messages')->with('messages', $messages);
  }
}
