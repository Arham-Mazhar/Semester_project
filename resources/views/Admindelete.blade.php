<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Spray+Paint&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
<style>
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}

#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #1a242f;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 60px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #222;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #1a242f !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
}
</style>
<script>
    $(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    
</script>
</head>
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand" href="https://bryanrojasq.wordpress.com">
                <img src="/image/PngItem_4610467.png" alt="LOGO" style="width: 146%;height: 5vh;">
                <h5 style="margin-top: -23px;margin-left: 126%;width: 105%;">Wheel <span style="color:rgb(255, 0, 0);font-size: 12px;">The</span> World</h5>
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="Adminlogin" class="dropdown-toggle" data-toggle="dropdown">Admin Logout</a>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="Welcome-Admin" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i>Home</a>
                 
                </li>
                <li>
                    <a href="add" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  Add Data </i></a>
                    
                </li>
                <li>
                 {{-- registered user view --}}
                    <a href="Admin-Display"><i class="fa fa-fw fa-user-plus"></i>Our Customers</a>
                </li>
                <li>
                    <a href="Admin-Home-Display"><i class="fa fa-fw fa-paper-plane-o"></i> Trips Data</a>
                </li>
                <li>
                    <a href="Delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp Delete Data</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

{{-- display is calling from here --}}
 <div class="flex-container" style="display: flex;justify-content:center;font-family:'Rubik Spray Paint', cursive;"><h1>Our customers List</h1></div>
    <div style="border:margin-top:5%;" class="container">
        <table class="table mt-5">
            <thead class=" bg-danger text-white fw-bold">
                <th>Travel id</th>
                <th>Traveler Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>DOB</th>
                <th>Gender</th>
            </thead>
            <tbody>
                @foreach ($read as $item)
                <tr>
                    <form action="updateordelete" method="GET">
                        @csrf
                    <td> {{$item['id']}}</td>
                    <td> {{$item['Name']}}</td>
                    <td> {{$item['Email']}}</td>
                    <td> {{$item['Password']}}</td>
                    <td> {{$item['DOB']}}</td>
                    <td> {{$item['Gender']}}</td>
                   
                    {{-- <td><a href="{{ url('edit/'.$item['id']) }}" class="btn btn-success">Edit</a></td> --}}
                    {{-- <td><a href="{{url('delete/'.$item['id'])}}" class="btn btn-danger">Delete</a></td> --}}

                </form>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div> 
</body>
</html>