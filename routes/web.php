<?php

use Illuminate\Support\Facades\Route;

//1
use Illuminate\Support\Facades\DB;
//2
use App\Models\Client;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio', function () {
    return view('Portfolio');
});

Route::get('user', function(){
    return view('user');
});
Route::get('home', function(){
    return 'home';
});
/////lab4
//// php artisan make:migration create_clients_table
////php artisan make:model Client
Route::get('client/add',function(){
    DB::table('clients')->insert([
        'name'=>'Medet',
        'lastname'=>'Kurganbayev',
        'age'=>19 
    ]);
});

Route::get('client',function(){
    $client = Client::find(1);
    return $client;//->name;
});