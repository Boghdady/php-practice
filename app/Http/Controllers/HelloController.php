<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function showUserDataAction()
    {
        // 1) connent to DB
        // 2) Select user data from user table
        // 3) Send it to welcome view
        return view('hello', [
            'name' => 'Ahmed Boghdday',
            'age' => 26,
            'habits' => ['Reading Books', 'Programming', 'Sport'],
        ]);
        
    }
    
}
