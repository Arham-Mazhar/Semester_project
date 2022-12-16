<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Hôtel Montecristo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
        {{-- for icone login --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
     .navbar-nav > a{
    /* border:2px solid red; */
    margin-left: 5%;
  }
  body{
    background-color:whitesmoke;
  }
  @media (max-width: 390px) {
    body {
        display: none
    }
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
.breadcrumb-item+.breadcrumb-item::before {
    content: ">"
}

.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .1rem 0rem !important;
    margin-bottom: 0rem;
    list-style: none;
    background-color: #ffffff;
    border-radius: .25rem
}

.single_product {
    padding-top: 66px;
    padding-bottom: 140px;
    background-color: #e5e5e5;
    margin-top: 0px;
    padding: 17px
}

.product_name {
    font-size: 20px;
    font-weight: 400;
    margin-top: 0px
}

.badge {
    display: inline-block;
    padding: 0.50em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem
}

.product-rating {
    margin-top: 10px
}

.rating-review {
    color: #5b5b5b
}

.product_price {
    display: inline-block;
    font-size: 30px;
    font-weight: 500;
    margin-top: 9px;
    clear: left
}

.product_discount {
    display: inline-block;
    font-size: 17px;
    font-weight: 300;
    margin-top: 9px;
    clear: left;
    margin-left: 10px;
    color: red
}

.product_saved {
    display: inline-block;
    font-size: 15px;
    font-weight: 200;
    color: #999999;
    clear: left
}

.singleline {
    margin-top: 1rem;
    margin-bottom: .40rem;
    border: 0;
    border-top: 1px solid rgba(0, 0, 0, .1)
}

.product_info {
    color: #4d4d4d;
    display: inline-block
}

.product_options {
    margin-bottom: 10px
}

.product_description {
    padding-left: 0px
}

.product_quantity {
    width: 104px;
    height: 47px;
    border: solid 1px #e5e5e5;
    border-radius: 3px;
    overflow: hidden;
    padding-left: 8px;
    padding-top: -4px;
    padding-bottom: 44px;
    float: left;
    margin-right: 22px;
    margin-bottom: 11px
}

.order_info {
    margin-top: 18px
}

.shop-button {
    height: 47px
}

.product_fav i {
    line-height: 44px;
    color: #cccccc
}

.product_fav {
    display: inline-block;
    width: 52px;
    height: 46px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.br-dashed {
    border-radius: 5px;
    border: 1px dashed #dddddd;
    margin-top: 6px
}

.pr-info {
    margin-top: 2px;
    padding-left: 2px;
    margin-left: -14px;
    padding-left: 0px
}

.break-all {
    color: #5e5e5e
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0.1) !important;
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

@media (max-width: 390px) {
    .product_fav {
        display: none
    }
}

.bbb_combo {
    width: 100%;
    margin-right: 7%;
    padding-top: 21px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 24px;
    border-radius: 5px;
    margin-top: 0px;
    text-align: -webkit-center
}

.bbb_combo_image {
    width: 170px;
    height: 170px;
    margin-bottom: 15px
}

.fs-10 {
    font-size: 10px
}

.step {
    background: #167af6;
    border-radius: 0.8em;
    -moz-border-radius: 0.8em;
    -webkit-border-radius: 6.8em;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 3.6em;
    margin-right: 5px;
    text-align: center;
    width: 3.6em;
    margin-top: 116px
}

.row-underline {
    content: "";
    display: block;
    border-bottom: 2px solid #3798db;
    margin: 0px 0px;
    margin-bottom: 20px;
    margin-top: 15px
}

.deal-text {
    margin-left: -10px;
    font-size: 25px;
    margin-bottom: 10px;
    color: #000;
    font-weight: 700
}

.padding-0 {
    padding-left: 0;
    padding-right: 0
}

.padding-2 {
    margin-right: 2px;
    margin-left: 2px
}

.vertical-line {
    display: inline-block;
    border-left: 3px solid #167af6;
    margin: 0 10px;
    height: 364px;
    margin-top: 4px
}

.p-rating {
    color: green
}

.combo-pricing-item {
    display: flex;
    flex-direction: column
}

.boxo-pricing-items {
    display: inline-flex
}

.combo-plus {
    margin-left: 10px;
    margin-right: 18px;
    margin-top: 10px
}

.add-both-cart-button {
    margin-left: 36px
}

.items_text {
    color: #b0b0b0
}

.combo_item_price {
    font-size: 18px
}

.p_specification {
    font-weight: 500;
    margin-left: 22px
}

.mt-10 {
    margin-top: 10px
}

@charset "utf-8";
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

* {
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

body {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #FFFFFF;
    color: #000000
}

div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

ul {
    list-style: none;
    margin-bottom: 0px
}

.single_product {
    padding-top: 16px;
    padding-bottom: 140px
}

.image_list li {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 165px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    cursor: pointer;
    padding: 15px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    overflow: hidden
}

.image_list li:last-child {
    margin-bottom: 0
}

.image_list li:hover {
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3)
}

.image_list li img {
    max-width: 100%
}

.image_selected {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: calc(100% + 15px);
    height: 525px;
    -webkit-transform: translateX(-15px);
    -moz-transform: translateX(-15px);
    -ms-transform: translateX(-15px);
    -o-transform: translateX(-15px);
    transform: translateX(-15px);
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    padding: 15px
}

.image_selected img {
    max-width: 100%
}

.product_category {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.5)
}

.product_rating {
    margin-top: 7px
}

.product_rating i {
    margin-right: 4px
}

.product_rating i::before {
    font-size: 13px
}

.product_text {
    margin-top: 27px
}

.product_text p:last-child {
    margin-bottom: 0px
}

.order_info {
    margin-top: 16px
}

.product_quantity {
    width: 182px;
    height: 50px;
    border: solid 1px #e5e5e5;
    border-radius: 5px;
    overflow: hidden;
    padding-left: 25px;
    float: left;
    margin-right: 30px
}

.product_quantity span {
    display: block;
    height: 50px;
    font-size: 16px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.5);
    line-height: 50px;
    float: left
}

.product_quantity input {
    display: block;
    width: 30px;
    height: 50px;
    border: none;
    outline: none;
    font-size: 16px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.5);
    text-align: left;
    padding-left: 9px;
    line-height: 50px;
    float: left
}

.quantity_buttons {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 29px;
    border-left: solid 1px #e5e5e5
}

.quantity_inc,
.quantity_dec {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: 50%;
    cursor: pointer
}

.quantity_control i {
    font-size: 11px;
    color: rgba(0, 0, 0, 0.3);
    pointer-events: none
}

.quantity_control:active {
    border: solid 1px rgba(14, 140, 228, 0.2)
}

.quantity_inc {
    padding-bottom: 2px;
    justify-content: flex-end;
    border-top-right-radius: 5px
}

.quantity_dec {
    padding-top: 2px;
    justify-content: flex-start;
    border-bottom-right-radius: 5px
}

</style>
<body>
    
      {{-- after navbar --}}
      <div class="super_container">
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
                  <a href="Userlogin"><span style="margin-top: 5px;;" class="glyphicon glyphicon-user">Login</span></a>  
                  {{-- <a  id="loginbutton" class="loginbutton" style="padding-top:1px;text-decoration:none;border:2px solid black;width:12%;text-align:center;border-radius:12px;color:white;background-color:black;margin-left:53%;" href="Userlogin">Login</a>
                </div> --}}
                
              </div>
            </div>
          </nav>
        <header class="header" style="display: none;">
            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="single_product">
            <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                <div class="row">
                    <div class="col-lg-2 order-lg-1 order-2">
                        <ul class="image_list">
                            <li data-image=""><img src="/KoreaImages/3.1.jpg" alt=""></li>
                            <li data-image=""><img src="/KoreaImages/3.2.jpg" alt=""></li>
                            <li data-image=""><img src="/KoreaImages/3.3.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="image_selected"><img src="/KoreaImages/3.4.jpg" alt=""></div>
                    </div>
                    <div class="col-lg-6 order-3">
                        <div class="product_description">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="SouthKorea-List">SOUTH kOREA List</a></li>
                                    <li class="breadcrumb-item active">Place To Stay</li>
                                </ol>
                            </nav>
                            <div class="product_name">Joo Ok Restaurant (3-star resort)</div>
                            <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                            <div> <span class="product_price">$ 500</span> <strike class="product_discount"> <span style='color:black'>$ 800<span> </strike> </div>
                            <div> <span class="product_saved">You Saved:</span> <span style='color:black'>$ 300<span> </div>
                            <hr class="singleline">
                            <div> <h1>Hotel description</h1><p>Hotel accessibility information</p></div>
                            <div>
                                <p>Building Access <br>

                                    Door width: 300 cm <br>
                                    
                                    Ramp inclination: Steep <br>
                                    
                                    Type of entrance: Entrance at ground level, ramp</p>
                              <h4><strong>Swimming Pool</strong></h4> 
                              <p>Type of entrance: Same level entrance (no steps) <br>
                                
                                Pool entrance: Pool lift <br>
                                
                                Outdoor amenities: Tables, chairs, sunbeds</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row row-underline">
                    <div class="col-md-6"> <span class=" deal-text">Accessibility features</span> </div>
                </div>
                <section>
                    <ul class="list-group list-group-horizontal" style="justify-content:space-between">
                        <li><i class="fa">&#xf007;</i><h4 style="margin-left: 7%;margin-top: -8%;width: 100%;font-weight:bold;">Type of assistence available</h4>
                        <p style="margin-left: 7%;padding:3%;">Push Wheel-Chair <br> Carry bags <br> Traveling taxis
                        </p>
                        </li>
                        <li><i class='fas'>&#xf6d3;</i><h4 style="font-weight:bold;margin-left: 12%;margin-top: -18px;width: 100%;">Service dogs allowed</h4>
                            <p style="margin-left: 7%;padding:3%;">Yes</p>
                        </li>
                        <li><i style="margin-left: -21px" class="fa">&#xf2a2;</i><h4 style="font-weight:bold;margin-left: -2%;margin-top: -14%;width: 100%;">Hering disability</h4>
                            <p style="margin-left: -4%;padding:3%;">None</p>
                        </li>
                        {{-- <li><i class="fa">&#xf29d;</i><h4>Visual disability <br> guidance</h4></li> --}}
                    </ul>
                    
                </section>
                
                <div class="row row-underline">
                    <div class="col-md-6"> <span class=" deal-text">Amenities</span> </div>
                </div>
                    <section>
                        <ul class="list-group list-group-horizontal" style="justify-content:space-between">
                            <li><i class="fa">&#xf1eb;</i>&nbsp Free Wifi</li>
                            <li><i class='fas'>&#xf5c5;</i>&nbsp Free Swimming</li>
                            <li style="margin-right: 24px;"><i class="fa">&#xf0e9;</i>&nbsp Beachfront</li>
                        </ul>
                    </section>
                    <section>
                        <ul class="list-group list-group-horizontal" style="justify-content:space-between">
                            <li><i class="fa">&#xf0f5;</i>&nbsp Restaurant onsite</li>
                            <li style="margin-left: -90px;"><i class='fas'>&#xf000;</i>&nbsp Bar onsite</li>
                            <li><i class="fa">&#xf44b;</i>&nbsp Fitness center</li>
                        </ul>
                    </section>
<!-- Footer -->
<footer class="bg-primary text-center text-white">
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