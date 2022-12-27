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
</head>
<style>
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

  }
  .conatiner > div:hover{
    cursor: pointer;
    width: 24%;
  }
  .conatiner img{
    width:100%;
  }
  .conatiner img:hover{
    cursor: pointer;
    width: 99%;
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
    background-image: url("image/panorama-gf12c434df_1920.jpg");
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
            <a class="nav-link active" aria-current="page" href="Homelogin">Home</a>
            <a class="nav-link" href="AboutUSlogin">About US</a>
            <a class="nav-link" href="ContactUslogin">Contact US</a>
            <li style="margin-left:5%" class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Travel
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Europ</a></li>
                <li><a class="dropdown-item" href="#">Asia</a></li>
                <li><a class="dropdown-item" href="#">America</a></li>
                <li><a class="dropdown-item" href="#">Canada</a></li>
              </ul>
            </li>
            <a id="loginbutton" class="nav-link" style="border:2px solid black;width:12%;text-align:center;border-radius:12px;color:white;background-color:black;margin-left:53%;" href="/">Logout</a>
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
        Most Popular Destination <span style="margin-top: 42px;margin-left: -24%;font-size: 50%;"><br>This is the Right place to enjoy your vocations..</span>
      </h1>
      
    </div>
    <div class="conatiner">
      <div class="div1">
        <img src="/image/statue-of-liberty-g85f02094b_1920.jpg" alt="">
        <h1>New York, USA</h1>
        <p>  The Statue of Liberty, Hollywood Sign, Golden Gate Bridge but it's also a place of incredible hospitality, wide open spaces and amazing natural beauty.</p>
     <button>Schedule Trip</button>
      </div>
      <div class="div2">
        <img src="/image/gwanghwamun-g52f77017f_1920.jpg" alt="">
        <h1>Seoul, South Korea</h1>
        <p>A nation ripe with cultural, historical, and natural tourist attractions, South Koreahas a plethora of interesting sights</p>
        <button>Schedule Trip</button>
      </div>
      <div class="div3">
        <img src="/image/paris-g5092fedb3_1920.jpg" alt="">
        <h1>Paris, France</h1>
        <p>The most populous city of France. Since the 17th century, Paris has been one of Europe's major centres of finance, diplomacy, commerce, fashion, science.</p>
        <button>Schedule Trip</button>
    </div>
      <div class="div3">
        <img src="/image/Australia.jpg" alt="">
        <h1>Sydney, Australia</h1>
        <p>Australia, officially the Commonwealth of Australia, is a sovereign country comprising the mainland of the Australian continent, the island of Tasmania, and numerous.</p>
        <button>Schedule Trip</button>
      </div>
      <div class="div3">
        <img src="/image/Greece europ.jpg" alt="">
        <h1>Greece, Europe</h1>
        <p>Situated on the southern tip of the Balkans, Greece is located at the crossroads of Europe, Asia, and Africa</p>
        <button>Schedule Trip</button>
      </div>
      <div class="div3">
        <img src="/image/travel-g66d748e4c_1920.jpg" alt="">
        <h1>Spain, Europe</h1>
        <p>A country with some pockets of territory across the Strait of Gibraltar and the Atlantic Ocean.</p>
        <button>Schedule Trip</button>
      </div>
    </middle>
    <middle_lower>
      <div class="mi">

      </div>
    </middle_lower>
        <!-- Footer -->
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
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
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
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
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>
</body>
</html>