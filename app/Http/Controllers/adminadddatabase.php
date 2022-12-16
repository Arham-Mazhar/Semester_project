<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminadd;

class adminadddatabase extends Controller
{
    function add1(Request $req){
        $newuser = new Adminadd;
        $newuser->Titile = $req->input('title');
        $newuser->Image=$req->input('img');
        $newuser->Discription=$req->input('disc');
        $newuser->save();
        return redirect('Admin-Home-Display');
    }
    function display(){
        $read = Adminadd::all();
        return view('adminhomepagedata',['read'=>$read]);
    }   
 
    
}
