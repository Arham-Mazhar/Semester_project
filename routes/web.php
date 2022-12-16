<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\database;
use App\Http\Controllers\admindatabase;
use App\Http\Controllers\Adminadddatabase;


Route::get('/',function(){
    return view('welcome');
});

Route::get('Userlogin', function () {
    return view('userlogin');
});
// Route::get('Home',function(){
//     return view('home');
// });
Route::get('Homelogin',function(){
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
Route::view('add','Adminadd');
Route::get('adding',[adminadddatabase::class,'add1']);

// {{-- registered user view --}}
Route::get('Admin-Display',function(){
    return view('admindisplay');
});
// Route::get("delete/{id}",[database::class,'remove']);
Route::get('Admin-Display',[database::class,'display']);
// Admin-Home-Display
Route::view('Admin-Home-Display','adminhomepagedata');

Route::get('Admin-Home-Display',[adminadddatabase::class,'display']);

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
Route::get('JooOk_Restaurant',function(){
    return view('Korea1');
});
Route::get('Jungsik_Seoul',function(){
    return view('Korea2');
});
Route::get('La_Yeon',function(){
    return view('Korea3');
});
Route::get('Mugunghwa',function(){
    return view('Korea4');
});
Route::get('Yookssam_Naengmyeon',function(){
    return view('Korea5');
});
Route::get('Hankook_Jib',function(){
    return view('Korea6');
});
//paris inside routes
Route::get('Pairis-List',function(){
    return view('ParisOnside');
});
Route::get('JooOk_Restaurant',function(){
    return view('Paris1');
});
Route::get('Jungsik_Seoul',function(){
    return view('Paris2');
});
Route::get('La_Yeon',function(){
    return view('Paris3');
});
Route::get('Mugunghwa',function(){
    return view('Paris4');
});
Route::get('Yookssam_Naengmyeon',function(){
    return view('Paris5');
});
Route::get('Hankook_Jib',function(){
    return view('Paris6');
});

//Australia inside Routes
Route::get('Australia-List',function(){
    return view('AustraliaInside');
});
Route::get('JooOk_Restaurant',function(){
    return view('Australia1');
});
Route::get('Jungsik_Seoul',function(){
    return view('Australia2');
});
Route::get('La_Yeon',function(){
    return view('Australia3');
});
Route::get('Mugunghwa',function(){
    return view('Australia4');
});
Route::get('Yookssam_Naengmyeon',function(){
    return view('Australia5');
});
Route::get('Hankook_Jib',function(){
    return view('Australia6');
});
//Europe inside Routes
Route::get('Europe-List',function(){
    return view('EuropeInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Europe1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Europe2');
// });
// Route::get('La_Yeon',function(){
//     return view('Europe3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Europe4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Europe5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Europe6');
// });
// Spain inside Route
Route::get('Spain-List',function(){
    return view('SpainInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Spain1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Spain2');
// });
// Route::get('La_Yeon',function(){
//     return view('Spain3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Spain4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Spain5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Spain6');
// });
//Pakistan inside Routes
Route::get('Pakistan-List',function(){
    return view('PakistanInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Pakistan1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Pakistan2');
// });
// Route::get('La_Yeon',function(){
//     return view('Pakistan3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Pakistan4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Pakistan5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Pakistan6');
// });
//Dubai inside Route
Route::get('Dubai-List',function(){
    return view('DubaiInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Dubai1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Dubai2');
// });
// Route::get('La_Yeon',function(){
//     return view('Dubai3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Dubai4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Dubai5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Dubai6');
// });
//China inside Routes
Route::get('China-List',function(){
    return view('ChinaInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('China1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('China2');
// });
// Route::get('La_Yeon',function(){
//     return view('China3');
// });
// Route::get('Mugunghwa',function(){
//     return view('China4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('China5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('China6');
// });
//Germany Inside Route
Route::get('Germany-List',function(){
    return view('GermanyInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Germany1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Germany2');
// });
// Route::get('La_Yeon',function(){
//     return view('Germany3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Germany4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Germany5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Germany6');
// });
// London inside Route
Route::get('London-List',function(){
    return view('LondonInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('London1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('London2');
// });
// Route::get('La_Yeon',function(){
//     return view('London3');
// });
// Route::get('Mugunghwa',function(){
//     return view('London4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('London5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('London6');
// });
//Canada inside Route
Route::get('Canada-List',function(){
    return view('CanadaInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Canada1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Canada2');
// });
// Route::get('La_Yeon',function(){
//     return view('Canada3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Canada4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Canada5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Canada6');
// });
//Portugal inside Route
Route::get('Portugal-List',function(){
    return view('PortugalInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Portugal1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Portugal2');
// });
// Route::get('La_Yeon',function(){
//     return view('Portugal3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Portugal4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Portugal5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Portugal6');
// });
//Japan inside Route
Route::get('Japan-List',function(){
    return view('JapanInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Japan1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Japan2');
// });
// Route::get('La_Yeon',function(){
//     return view('Japan3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Japan4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Japan5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Japan6');
// });
//Singapore inside route
Route::get('Singapore-List',function(){
    return view('SingaporeInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Singapore1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Singapore2');
// });
// Route::get('La_Yeon',function(){
//     return view('Singapore3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Singapore4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Singapore5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Singapore6');
// });
//Denmark inside Route
Route::get('Denmark-List',function(){
    return view('DenmarkInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Denmark1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Denmark2');
// });
// Route::get('La_Yeon',function(){
//     return view('Denmark3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Denmark4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Denmark5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Denmark6');
// });
//Turkey inside Route
Route::get('Turkey-List',function(){
    return view('TurkeyInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Turkey1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Turkey2');
// });
// Route::get('La_Yeon',function(){
//     return view('Turkey3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Turkey4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Turkey5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Turkey6');
// });
//Thailand inside Route
Route::get('Thailand-List',function(){
    return view('ThailandInside');
});
// Route::get('JooOk_Restaurant',function(){
//     return view('Thailand1');
// });
// Route::get('Jungsik_Seoul',function(){
//     return view('Thailand2');
// });
// Route::get('La_Yeon',function(){
//     return view('Thailand3');
// });
// Route::get('Mugunghwa',function(){
//     return view('Thailand4');
// });
// Route::get('Yookssam_Naengmyeon',function(){
//     return view('Thailand5');
// });
// Route::get('Hankook_Jib',function(){
//     return view('Thailand6');
// });

//Trip booking form routes

Route::get('Booking',function(){
    return view('Tripbook');
});