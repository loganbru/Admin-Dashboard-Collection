<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatAppController extends Controller
{
    // Chat App
    public function chatApp(){
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'bodyClass' => 'chat-application',
        ];

        return view('/pages/app-chat', [
            'pageConfigs' => $pageConfigs
        ]);
    }
}
