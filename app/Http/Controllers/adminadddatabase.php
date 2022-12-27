<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminadd;

class adminadddatabase extends Controller
{
    function add1(Request $req){
        $newuser = new Adminadd;
        $newuser->Titile = $req->input('title');
        if($req->hasFile('image'))
        {
            $file =  $req->File('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('upload/',$fileName);
            $newuser->image = $fileName;
          
        }
        
        $newuser->Description=$req->input('disc');
        $newuser->save();
        return redirect('Admin-Home-Display');
    }
    function display(){
        $read = Adminadd::all();
        return view('adminhomepagedata',['read'=>$read]);
    }   
    function delete($id){
        $data = Adminadd::find($id);
        $data->delete();
        return redirect("Admin-Home-Display");
    }
    function Edit($id){
        $data= Adminadd::find($id);
        return view('adminedit',["data"=>$data]);
    }
    function Update(Request $req){
        $data=Adminadd::find($req->id);
        $data->Titile=$req->title;
        $data->Image=$req->image;
        $data->Description=$req->disc;
        
        // $data->Gender=$req->gender;
        $data->save();
        return redirect("Admin-Home-Display");
    }

    
    
}
 