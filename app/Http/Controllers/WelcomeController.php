<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function showWelcomeMessageAction()
    {
        return view('welcome', ['message' => 'Start Study Laravel Framework']);
    }
}
