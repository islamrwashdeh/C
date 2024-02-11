<?php

use App\Http\Controllers\Booking;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    $name ='salma';
    $val =5;
    return view('firstView')->with('renderdName',$name)->with('value',$val);
});


Route::get('/myBookings',Booking::class . '@myBookings');

Route::get('/sayHi/{name}',Booking::class .'@sayHi');
