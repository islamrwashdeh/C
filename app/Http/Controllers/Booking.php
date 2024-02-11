<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Booking extends Controller
{
    //
    function myBookings(Request $request){
        return "my booookings ";

    }


    function sayHi(Request $request, $name ){
        return " hi " .$name;

    }
}
