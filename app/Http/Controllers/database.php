<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travelmodel;
use Illuminate\Support\Facades\DB;
class database extends Controller
{
    function insert(Request $req){
        $newuser = new Travelmodel;
        $newuser->Name = $req->input('name');
        $newuser->Email = $req->input('email');
        $newuser->Password = $req->input('password');
        $newuser->DOB = $req->input('DOB');
        $newuser->Gender = $req->input('gender');
        $newuser->save();
        return redirect('Userlogin');
    }
    function display(){
        $read = Travelmodel::all();
        return view('admindisplay',['read'=>$read]);
    }  
    function userlog(Request $req){
        $username = $req->input('name');
        $userpassword = $req->input('password');
        $check = DB::table('travelmodels')->where('name',$username)->where('password',$userpassword)->get();
        $auth = count($check);
        if($auth == 1){
            return redirect('Homelogin');
        }
        else{
            return redirect('Userlogin');
        }
    }
    function remove($id){
        $data = Travelmodel::find($id);
        $data->delete();
        return redirect("Admin-Display");
    }
    function edit($id){
        $data= Travelmodel::find($id);
        return view('adminedit',["data"=>$data]);
    }
    function update(Request $req){
        $data=Travelmodel::find($req->id);
        $data->Name=$req->name;
        $data->Email=$req->email;
        $data->Password=$req->password;
        $data->DOB=$req->DOB;
        // $data->Gender=$req->gender;
        $data->save();
        return redirect("Admin-Display");
    }
}
