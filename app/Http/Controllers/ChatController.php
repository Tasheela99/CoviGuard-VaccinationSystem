<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function chatOption(){
        return view('chat-option');
    }

    public function chatApplication(Request $request){
        event(
            new Message($request->input('username'),$request->input('message'))
        );
        return ["success"=> true];
    }
}
