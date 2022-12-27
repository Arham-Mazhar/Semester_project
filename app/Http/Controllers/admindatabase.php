<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class admindatabase extends Controller
{
    function adminlog(Request $req){
        $username = $req->input('name');
        $userpassword = $req->input('password');
        $check = DB::table('admins')->where('name',$username)->where('password',$userpassword)->get();
        $auth = count($check);
        if($auth == 0){
            return redirect('Welcome-Admin');
        }
        else{
            return redirect('Adminlogin');
        }
    }
   
}
