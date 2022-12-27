<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\database;
use App\Http\Controllers\admindatabase;
use App\Http\Controllers\Adminadddatabase;
use App\Http\Controllers\cardstoredatabase;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

Route::get('/',[cardstoredatabase::class,'display']);

Route::get('Userlogin', function () {
    
    return view('userlogin');
});
// Route::get('Home',function(){
//     return view('home');
// });
Route::get('Homelogin',function(){
    Mail::to('info@WheelTheWorld.com')->send(new WelcomeMail());
    return view('homeafterlogin');
});
Route::get('Adminlogin',function(){
    return view('adminlogin');
});
Route::get('User_Registration',function(){
    return view("usercreate");
});

Route::get('ContactUs',function(){
return view('contactus');
});
Route::get('ContactUslogin',function(){
    return view('contactusafterlogin');
    });
Route::get('AboutUS',function(){
    return view('aboutus');
});
Route::get('AboutUSlogin',function(){
    return view('aboutusafterlogin');
});

//insertion for user login create new account 
Route::post('signup',[database::class,'insert']);

//here we authenticate the user login
Route::get('login',[database::class,'userlog']);

//here admin database
Route::get('loginadmin',[admindatabase::class,'adminlog']);

// Route::get('Admin-Home',function(){
//     return view('adminafterlogin');
//     });
Route::get('USA-List',function (){
    return view('USAinside');
});
//To add product/trip
Route::get('add',function(){
    return view('Adminadd');
});
Route::put('adding',[adminadddatabase::class,'add1']);

// {{-- registered user view --}}
Route::get('Admin-Display',function(){
    return view('admindisplay');
});
// Route::get("delete/{id}",[database::class,'remove']);
Route::get('Admin-Display',[database::class,'display']);
// Admin-Home-Display
Route::view('Admin-Home-Display','adminhomepagedata');
//admin deletion card or CRUD operations
Route::get('Admin-Home-Display',[adminadddatabase::class,'display']);
Route::get('remove/{id}',[adminadddatabase::class,'delete']);

// Admina after adminpage
Route::view('Welcome-Admin','adminafterlogin2');

//admin delete function

// Route::get('Delete',function(){
//     return view('Admindelete');
// });

Route::get("delete/{id}",[database::class,'remove']);

//to edit customer
Route::get('edit/{id}',[database::class,'edit']);
Route::post('update1',[database::class,'update']);
Route::view('Edit','adminedit');

//USA INSIDE PAGE ROUTES
Route::get('Royal-resort',function(){
    return view('usa1');
});

//South Koera inside Page Route
Route::get('SouthKorea-List',function(){
    return view('SouthKoreaInside');
});
// 
//paris inside routes
Route::get('Pairis-List',function(){
    return view('ParisOnside');
});


//Australia inside Routes
Route::get('Australia-List',function(){
    return view('AustraliaInside');
});

//Europe inside Routes
Route::get('Europe-List',function(){
    return view('EuropeInside');
});

// Spain inside Route
Route::get('Spain-List',function(){
    return view('SpainInside');
});

Route::get('Pakistan-List',function(){
    return view('PakistanInside');
});

//Dubai inside Route
Route::get('Dubai-List',function(){
    return view('DubaiInside');
});

//China inside Routes
Route::get('China-List',function(){
    return view('ChinaInside');
});

//Germany Inside Route
Route::get('Germany-List',function(){
    return view('GermanyInside');
});

// London inside Route
Route::get('London-List',function(){
    return view('LondonInside');
});

//Canada inside Route
Route::get('Canada-List',function(){
    return view('CanadaInside');
});

//Portugal inside Route
Route::get('Portugal-List',function(){
    return view('PortugalInside');
});

//Japan inside Route
Route::get('Japan-List',function(){
    return view('JapanInside');
});

//Singapore inside route
Route::get('Singapore-List',function(){
    return view('SingaporeInside');
});

//Denmark inside Route
Route::get('Denmark-List',function(){
    return view('DenmarkInside');
});

//Turkey inside Route
Route::get('Turkey-List',function(){
    return view('TurkeyInside');
});

//Thailand inside Route
Route::get('Thailand-List',function(){
    return view('ThailandInside');
});


//Trip booking form routes

Route::get('Booking',function(){
    return view('Tripbook');
});
 //Route for mailing
 Route::get('/email',function(){
    Mail::to('info@arham.com')->send(new WelcomeMail());
    return new WelcomeMail();
 });

