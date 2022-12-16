<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Pakistan-List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
        {{-- for icone login --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<style>
     .navbar-nav > a{
    /* border:2px solid red; */
    margin-left: 5%;
  }
  body{
    background-color:whitesmoke;
  }
  .flex-container {
    margin-top: 3%;
    margin-bottom: 3%;
    display: flex;
    flex-wrap: nowrap;
    background-color: #ffffff;
    height: 25vh;
    margin-left: 16%;
    width: 62%;
    border-color: #757575;
    border-radius: 12px;

}

.flex-container > div {
  /* background-color: #f1f1f1; */
  width: 41%;
  margin: 10px;
  text-align: center;
  /* line-height: 75px; */
  /* font-size: 30px; */
}
.flex-container div a img{
  width: 65%;
    margin-top: -9px;
    height: 25vh;
    margin-left: -38%;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
  }
  .usa{
    /* border: 2px solid red; */
    margin-top: -50%;
    margin-left: 47%;
    width: 96%;
  }
  .usa p{
    margin-left: -34%;
    font-size: 20px;
  }
  .usa h5{
    font-size: 21px;
    color: #007a87;
  }
  .usa h6{
    font-size: 16px;
    color: #757575;
    margin-left: -36%;
  }
  .usa h4{
    font-size: 13px;
    margin-top: -1%;
    margin-left: -11%;
  }
  .usa button{
    margin-left: 173%;
    margin-top: -12%;
    border-radius: 12px;
    display: flex;
    width: 26%;
    justify-content: center;
    padding: 1%;
    color: #2f6fe4;
    border-color: #2f6fe4;
    background-color: transparent;
  }
  .usa button:hover{
    cursor: pointer;
    background-color: #2f6fe4;
    color: white;
    
  }
  .usa button:active{
    background-color: #007a87;
    color: white;
  }
</style>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a style="font-weight:bold" class="navbar-brand" href="/">Wheel <span style="color:aqua;font-size: 12px;">THE</span> World</a>
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
              <a href="Userlogin"><span style="margin-top: 5px;" class="glyphicon glyphicon-user">Login</span></a>  
              {{-- <a  id="loginbutton" class="loginbutton" style="padding-top:1px;text-decoration:none;border:2px solid black;width:12%;text-align:center;border-radius:12px;color:white;background-color:black;margin-left:53%;" href="Userlogin">Login</a>
            </div> --}}
            
          </div>
        </div>
      </nav>

      <div class="flex-container">
        <div>
          <a href="JooOk_Restaurant"><img src="/parisImages/161412891.jpg" alt=""></a>
          <div class="usa">
            <p>3-start resort</p>
            <h5 ><strong style="margin-left: -3%">Pullman Paris Tour Eiffel</strong></h5>
            <h6 style="-33%">Paris, France</h6>
            <div style="border-top: 2px solid #757575; margin-left: 21%; margin-top: -2%; margin-bottom: 2%;margin-right: 57%;"></div>
            <h4><small>Free wifi acess, Free swiming pool, Fitness center</small></h4>
            <a href="JooOk_Restaurant">
              <button>See More</button>
            </a>
            
          </div>

        </div>
      </div>
      <div class="flex-container">
        <div>
          <a href="Jungsik_Seoul"><img src="/parisImages/2.jpg" alt=""></a>
          <div class="usa">
            <p>5-start resort</p>
            <h5 style="margin-left: -20%;"><strong>Résidence du Pré</strong></h5>
            <h6 style="margin-left:-37%;"> Paris, France </h6>
            <div style="border-top: 2px solid #757575; margin-left: 20%; margin-top: -2%; margin-bottom: 2%;margin-right: 57%;"></div>
            <h4><small>Free wifi acess, Free swiming pool, Fitness center</small></h4>
            <a href="Jungsik_Seoul">
              <button>See More</button>
            </a>
          </div>
        </div>
      </div>
      <div class="flex-container">
        <div>
          <a href="La_Yeon"><img src="/parisImages/3.jpg" alt=""></a>
          <div class="usa">
            <p>3-start resort</p>
            <h5 style="    margin-left: -30%;"><strong>Relais du Pré</strong></h5>
            <h6 style="margin-left:-38%;">Paris, France </h6>
            <div style="border-top: 2px solid #757575; margin-left: 20%; margin-top: -2%; margin-bottom: 2%;margin-right: 58%;"></div>
            <h4><small>Free wifi acess, Free swiming pool, Fitness center</small></h4>
            <a href="La_Yeon">
              <button>See More</button>
            </a>
          </div>
        </div>
      </div>
      <div class="flex-container">
        <div>
          <a href="Mugunghwa"><img src="/parisImages/4.jpg" alt=""></a>
          <div class="usa">
            <p>3-start resort</p>
            <h5 style="margin-left:4% "><strong>Les Jardins Du Luxembourg</strong></h5>
            <h6 style="margin-left:-37% ">Paris, France </h6>
            <div style="border-top: 2px solid #757575; margin-left: 21%; margin-top: -2%; margin-bottom: 2%;margin-right: 58%;"></div>
            <h4><small>Free wifi acess, Free swiming pool, Fitness center</small></h4>
            <a href="Mugunghwa">
              <button>See More</button>
            </a>
          </div>
        </div>
      </div>
      <div class="flex-container">
        <div>
          <a href="Yookssam_Naengmyeon"><img src="/parisImages/5.jpg" alt=""></a>
          <div class="usa">
            <p>3-start resort</p>
            <h5 style="margin-left: -34%"><strong>Hôtel Léna</strong></h5>
            <h6 style="margin-left: -36%;"> Paris, France </h6>
            <div style="border-top: 2px solid #757575; margin-left: 21%; margin-top: -2%; margin-bottom: 2%;margin-right: 57%;"></div>
            <h4><small>Free wifi acess, Free swiming pool, Fitness center</small></h4>
            <a href="Yookssam_Naengmyeon">
              <button>See More</button>
            </a>
          </div>
        </div>
      </div>
      <div class="flex-container">
        <div>
          <a href="Hankook_Jib"><img src="/parisImages/6.jpg" alt=""></a>
          <div class="usa">
            <p>5-start resort</p>
            <h5 style="margin-left: -20%;"><strong>Hôtel Montecristo</strong></h5>
            <h6 style="    margin-left: -37%;">Paris, France </h6>
            <div style="border-top: 2px solid #757575; margin-left: 21%; margin-top: -2%; margin-bottom: 2%;margin-right: 58%;"></div>
            <h4><small>Free wifi acess, Free swiming pool, Fitness center</small></h4>
            <a href="Hankook_Jib">
              <button>See More</button>
            </a>
          </div>
        </div>
      </div>
<!-- Footer -->
<footer class="bg-primary text-center text-white" >
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

</body>

</html>