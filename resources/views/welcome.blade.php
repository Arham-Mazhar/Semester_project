<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/nav.css">
    <title>Wheel the World</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
    {{-- for icone login --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
  body{
    background-color: rgb(255, 253, 253);
  }
  .sliders3{
    width: 100%;
    /* height: 53vh; */
  }
  /* middle working */
  .middle_heading{
    /* border: 2px solid green; */
    display: flex;
    justify-content: center;
    padding: 12%;
  }
  .d-block{
    width: 100%;
    height: 62vh;
  }
  .conatiner{
    display: flex;
    /* background-color: rgb(255, 255, 255); */
    flex-wrap:wrap;
    justify-content: space-between;
    /* box-sizing: border-box; */
    /* border: 3px solid red; */
    padding: 7%;
    
  
  }
  .conatiner > div{
    background-color: rgb(243, 243, 243);
    width: 25%;
    margin: 10px;
    text-align: center;
    border: 3px solid rgb(253, 252, 252);
    border-radius: 22px;

  }
  /* .conatiner > div:hover{
    cursor: pointer;
    width: 24%;
  } */
  .conatiner img{
    width:100%;
  }
  .conatiner img:hover{
    cursor: pointer;
   /* background-color: rgb(255, 255, 255); */
  }
  .conatiner h1{
    font-size: 150%;
    margin-top: 32px;
  }
  .conatiner p{
    display: flex;
    justify-content: center;
  }
  .conatiner button{
    width: 40%;
    padding: 7px;
    background: #1a1a1a;
    border: 2px solid #1a1a1a;
    color: white;
    margin-bottom: 22px;
    height: auto;
  }
  .conatiner button:hover{
    background-color: #09C6AB;;
    border: 2px solid #09C6AB;
  }
  /* end middle working */

  .mi{
    background-attachment: fixed;
    background-size: cover;
    /* background-repeat: no-repeat; */
    background-image: url("/image/globe_map_travel_127886_3840x2400.jpg");
    /* border: 2px solid red; */
    width: 100%;
    height: 100%; 
    filter: brightness(50%);
  }
  middle_lower 
  {
    width: 200%;
    height: 100vh;
  }
  footer{
    width: 100%;
    
  }
  .hi {
    height: 62vh !important;
    width: 100%;
    background-size: cover;
    object-fit: fill;
  }
  .navbar-nav > a{
    /* border:2px solid red; */
    margin-left: 5%;

  }
 

</style>
<body>
    <!-- Navigation bar -->
    <div class="background">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a style="font-weight:bold" class="navbar-brand" href="#">Wheel <span style="color:aqua;font-size: 12px;">THE</span> World</a>
        <!-- data-bs-target is to show the attribute like home, about.........collapse is used to drop down or drop up the attributes -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#content" >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="content">
          <div class="navbar-nav" style="border: 3px solid transparent;width:100%;">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="AboutUS">About US</a>
            <a class="nav-link" href="ContactUs">Contact US</a>
            <li style="margin-left:5%" class="nav-item dropdown">
              <a style="margin-top: -10px;" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Traveling Officals
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://european-union.europa.eu/index_en" target="_blank">Europ</a></li>
                <li><a class="dropdown-item" href="https://asiatravels.com.pk/"  target="_blank">Asia</a></li>
                <li><a class="dropdown-item" href="https://www.visittheusa.com/" target="_blank">America</a></li>
                <li><a class="dropdown-item" href="https://travel.gc.ca/" target="_blank">Canada</a></li>
              </ul>
            </li>
            <a href="Userlogin"><span style="margin-top: 5px;;" class="glyphicon glyphicon-user">Login</span></a>  
            {{-- <a  id="loginbutton" class="loginbutton" style="padding-top:1px;text-decoration:none;border:2px solid black;width:12%;text-align:center;border-radius:12px;color:white;background-color:black;margin-left:53%;" href="Userlogin">Login</a> --}}
          </div>
          
        </div>
      </div>
    </nav>
  </div>
  <!-- slider -->
  <slider>
    <div id="slider" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="sliders3">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- <img src="/image/pakistan-gf3979c6e8_1920.jpg" class="d-block" alt="..."> -->
            <video class="hi" src="/video/Turin, Italy - City Cinematic Video.mp4" loop autoplay muted></video>
            <div class="carousel-caption d-none d-md-block">
              <h5>PAKISTAN</h5>
              <p>One of the most beautyful country all over the world</p>
            </div>
          </div>
          <div class="carousel-item">
            <!-- <img src="/image/schilthorn-g25c97c698_1920.jpg" class="d-block  " alt="..."> -->
            <video class="hi" src="/video/Beautiful Switzerland by drone in 4k Aerial footage of famous places in Switzerland.mp4" loop autoplay muted></video>
            <div class="carousel-caption d-none d-md-block">
              <h5>SWITZERLAND</h5>
              <p>A landlocked country situated at the confluence of Western, Central, and Southern Europe.</p>
            </div>
          </div>
          <div class="carousel-item">
            <!-- <img src="/image/venice-g4177e279d_1920.jpg" class="d-block " alt="..."> -->
            <video class="hi" src="/video/Turin, Italy - City Cinematic Video.mp4" loop autoplay muted></video>
            <div class="carousel-caption d-none d-md-block">
              <h5>ITALY</h5>
              <p>A country consisting of a continental part, delimited by the Alps, a peninsula and several islands surrounding it</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </slider>
  <!-- middle -->
  <middle>
    <div>
      <h1 class="middle_heading">
        Most Popular Destination <span style="margin-top: 42px;margin-left: -28%;font-size: 50%;"><br>This is the Right place to enjoy your vocations..</span>
      </h1>
      
    </div>
    <div class="conatiner">
      @foreach($read as $item)
      <div class="div1">
        <a href="USA-List"> <img src={{asset('upload/'.$item->Image)}} alt=""></a>
        <h1>{{$item->Titile}}</h1>
        <p> {{$item->Description}}.</p>
     {{-- <button>Schedule Trip</button> --}}
      </div>
      @endforeach
    </middle>
    <middle_lower>
      <div class="mi">

      </div>
    </middle_lower>
        <!-- Footer -->
<!-- Footer -->
<footer class="bg-primary text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Enter Your mail for more notifications</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button style="width:100%;" type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Wheel the world is one of the top travelling website side. which become a part of your journey.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">About</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="AboutUS" class="text-white">About Us</a>
            </li>
            <li>
              <a href="ContactUs" class="text-white">Contact Us</a>
            </li>
            
            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">DESTINATION</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="" class="text-white">Fort Worth, United States</a>
            </li>
            <li>
              <a href="#!" class="text-white">Maui, United States</a>
            </li>
            <li>
              <a href="#!" class="text-white">Cairo, Egypt</a>
            </li>
            <li>
              <a href="#!" class="text-white">Chaiten, Chile</a>
            </li>
            <li>
              <a href="#!" class="text-white">Tortuguero, Costa Rica</a>
            </li>
            <li>
              <a href="#!" class="text-white">Cádiz, Spain</a>
            </li>
            <li>
              <a href="#!" class="text-white">Munich, Germany</a>
            </li>
            <li>
              <a href="#!" class="text-white">Wales, United Kingdom</a>
            </li>
            <li>
              <a href="#!" class="text-white">Wisconsin, United States</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          {{-- <h5 class="text-uppercase">Links</h5> --}}

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Valle Sagrado, Peru</a>
            </li>
            <li>
              <a href="#!" class="text-white">Puerto Varas, Chile</a>
            </li>
            <li>
              <a href="#!" class="text-white">Yanuca, Fiji</a>
            </li>
            <li>
              <a href="#!" class="text-white">Islamabad, Pakistan</a>
            </li>
            <li>
              <a href="#!" class="text-white">Las Vegas, United States</a>
            </li>
            <li>
              <a href="#!" class="text-white">Stockholm, Sweden</a>
            </li>
            <li>
              <a href="#!" class="text-white">Memphis, United States</a>
            </li>
            <li>
              <a href="#!" class="text-white">Rio de Janeiro, Brazil</a>
            </li>
            <li>
              <a href="#!" class="text-white">Easter Island, Chile</a>
            </li>
            <li>
              <a href="#!" class="text-white">Orlando, United States</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          {{-- <h5 class="text-uppercase">Links</h5> --}}

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Napa, United States</a>
            </li>
            <li>
              <a href="#!" class="text-white">Casablanca, Morocco</a>
            </li>
            <li>
              <a href="#!" class="text-white">Berkeley, United States</a>
            </li>
            <li>
              <a href="#!" class="text-white">Leiden, Netherlands</a>
            </li>
            <li>
              <a href="#!" class="text-white">Florianopolis, Brazil</a>
            </li>
            <li>
              <a href="#!" class="text-white">Leiden, Netherlands</a>
            </li>
            <li>
              <a href="#!" class="text-white">Petaluma, United States</a>
            </li>
            <li>
              <a href="#!" class="text-white">Alaska, United States</a>
            </li>
            <li>
              <a href="#!" class="text-white">Marrakech, Morocco</a>
            </li>
            <li>
              <a href="#!" class="text-white">Chattanooga, Tennessee, United States</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="/">Wheel the World</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>
</body>
</html>