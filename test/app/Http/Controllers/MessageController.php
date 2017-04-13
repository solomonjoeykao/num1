<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function index()
    {
    	$messages = Message::all();
    	return view('messages.index',['messages' => $messages,]);
    }

    public function store(Request $request)
    {
    	$message = new Message;
    	$message->body = $request->body;
    	$message->save();
    	return redirect('messages');
    }

    public function destroy(Request $request,Message $message)
    {
    	$message->delete();

    	return redirect('/messages');
    }

    public function show(Message $message)
    {
    	return view('messages.show',['message'=>$message]);
    }

    public function edit(Message $message)
    {
    	return view('messages.edit',['message'=>$message]);
    }

    public function update(Request $request,Message $message)
    {
    	$message->update(['body'=>$request->body]);
    	return redirect('/messages');
    }
}
