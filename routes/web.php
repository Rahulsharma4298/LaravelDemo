<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Str;                   //Using String Class
use App\Mail\SampleMail;                   //Using created mail and making route to show it



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

//Routing through conroller
Route::get('/', [PageController::class, 'index']);

//Route::view('/', 'index');  //This also work, but we cannot pass data to url(dynamic routing)

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

//Dynamic Routing -->
Route::get('/services/{name}/{id}', function ($name, $id) {
    return '<div style="text-align: center; background: linear-gradient(to right, royalblue, skyblue);"><h1>Service Name: ' . $name . '<br>ID: '. $id .'</h1></div>';
});

//Route::post('/users', [UserController::class, 'getUser']);
Route::view('/noaccess', 'pages.noaccess');
Route::view('/notallowed', 'pages.notallowed');

Route::group(['middleware' => ['serviceProtection']], function () {    //Applied group middleware to a particular Route
    Route::view('/services/{name}/{id}', 'pages.services');
    Route::view('/services', 'pages.services');
});

//Route::view('login', 'pages.login')->middleware('ageProtection');   //Route middleware 

Route::get('users/{id}', [UserController::class, 'index']);
Route::get('users', [UserController::class, 'getAllUsers']); //get all users from db, using UserController and User Model
Route::post('user', [UserAuth::class, 'userLogin']);
Route::view('profile', 'pages.profile');
Route::get('members', [UserController::class, 'getUsersData']);
Route::get('/login', function() {
    if(session()->has('user')){
        return view('profile');
    }
    return view('pages.login'); 
});
Route::get('/logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});

Route::view('register', 'pages.register');
Route::post('register', [UserController::class, 'addUser']);

Route::view('upload', 'pages.file_upload');
Route::post('upload', [UploadController::class, 'uploadData']);
Route::view('local', 'pages.local');
Route::get('local/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('pages.local');

});
Route::get('allusers', [UserController::class, 'showAllUsers']);
Route::get('delete/{id}', [UserController::class, 'deleteUser']);
Route::get('edit/{id}', [UserController::class, 'showData']);
Route::post('/edit', [UserController::class, 'editUser']);
Route::get('database/operations', [UserController::class, 'databaseOperations']);
Route::get('database/jobs', [UserController::class, 'getUserJob']);
Route::get('company/{key}', [CompanyController::class, 'index']);           //Route Model Binding
//Route::get('company/{company_name}', [CompanyController::class, 'index']); //To get company details by other key like name
Route::get('mail', function () {
    return new SampleMail();
});

$data = "hello, this is laravel";
// $data = Str::ucfirst($data);
// $data = Str::replaceFirst('Hello', 'hi', $data);
// $data = Str::camel($data);
//We can do this more fluently using Fluent string

$data = Str::of($data)->ucfirst()->replace('Hello', 'hi', $data)->camel();  //See, chaining becomes easy and elegent
//echo $data;






