<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {   // Apply this middleware in all actions or methods in this controller
        $this -> middleware('auth') -> except('showData');
    }
    public function showData()
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

  public  function  updateProfile(){
        return 'Update User Profile Route';
    }

}
