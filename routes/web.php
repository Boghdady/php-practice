<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'WelcomeController@showWelcomeMessageAction');

// Route::get('/hello', function(){
//     return view('hello',['name'=> 'Ahmed Boghdday', 'age'=> 26, 'habits'=>['Reading Books', 'Programming', 'Sport']]);
// });

Route::get('/hello', 'HelloController@showUserDataAction');

//Route Parameters
// 1- Required Parameters
Route::get('/books/{id}', function ($id) {
    return $id;
});

// 2- Optional Parameters
Route::get('/users/{name?}', function ($name) {
    return $name;
})->name('showUserData');

Route::namespace('Front')->group(function () {
    Route::get('/getAll', 'UserController@showData');
});

// users/getAllUsers
// users/updateUser
// users/deleteUser

//Route::prefix('users') ->group(function(){
//    Route::get('getAllUsers','');
//    Route::patch('updateUser','');
//    Route::delete('deleteUser','');
//});

Route::group([ 'prefix' => 'tours','middleware' => 'auth'], function (){
    Route::get('/',function(){
        return 'login';
    });
});

Route::group(['namespace' => 'AdminPanel', 'prefix' => 'admin'],function (){
    Route::get('allAdmins', function (){});
    Route::patch('updateAdmin', function (){});
    Route::delete('deleteAdmin', function (){}) -> middleware('auth');
});

// Use Resource is useful in CRUD Operations
Route::resource('news','NewsController');
