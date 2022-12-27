<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminadd;

class cardstoredatabase extends Controller
{
    function display(){
        $read = Adminadd::all();
        return view('welcome',compact('read'));
    }   
   
}