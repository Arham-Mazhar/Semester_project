<!DOCTYPE html>
<html lang="en">
<head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/nav.css">
        <title>Trip booking Form</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
        {{-- for icone login --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
   .card{
  margin:auto;
  border:solid 1px #dbdad7; 
  width:60%; 
  padding-left:10px!important;
  padding-bottom:10px!important;
  padding-right:10px!important;
  padding-top: 0px!important;
  
}

.card-title{
  margin:auto;
  padding:15px;
  background-color: #2f7fad;
  color: white;
  width:80%;
}

div.card-body{
  padding:0px;
}
.custom-select{
  width:100%;
}

.btn2{
  margin-left:10%;
}
input {
  outline: 0!important;
  border-width: 0 0 2px!important;
  border-color: #d1d1cf!important;
}
input:focus {
  border-color: #d1d1cf!important;
 -webkit-box-shadow: none!important;
  box-shadow: none!important;
}

select{

 outline: 0!important;
  border-width: 0 0 2px!important;
  border-color: #d1d1cf!important;
}

select:focus{
    border-color: #d1d1cf!important;
 -webkit-box-shadow: none!important;
  box-shadow: none!important;
}

.radiobtn{
  margin-left: 3.5%;
}

.icons{
  margin:auto!important;

}

.fa{
  border-radius: 25px;
  width: 10%;
  margin-left: 5%;
  border:solid 2px #dbdad7;
  margin-top:5%;
  text-align: center;
}

.fa-plane{
  color:#1cad9f;
}

.fa-taxi{
  color: #c2f700;
}

.fa-train{
  color:red;
}

@media only screen and (max-width: 600px) {
  .card{
    margin:auto;
    border:solid 1px #dbdad7;
    width:90%;
    padding-left:10px!important;
    padding-bottom:10px!important;
    padding-right:10px!important;
    padding-top: 0px!important;
  
  }

  .fa{
    border-radius: 25px;
    width: 15%;
    margin-left: 5%;
    border:solid 2px #dbdad7;
    margin-top:5%;
    text-align: center;
  }
}
</style>
<body>
    <!--Card-->
<div class="card shadow mb-5 bg-white rounded">

	<!--Card-Body-->
	<div class="card-body">

		<!--Card-Title-->
		<p class="card-title text-center shadow mb-5 rounded">Travel Booking Form</p>
 
 <div class="icons text-center">

<i class="fa fa-plane fa-2x" aria-hidden="true"></i>
<i class="fa fa-taxi fa-2x" aria-hidden="true"></i>
<i class="fa fa-train fa-2x" aria-hidden="true"></i>


 </div>

    <hr>

		<p class="searchText"><strong>Search For Cheap Flights</strong></p>

		<!--First Row-->
		<div class="row mb-3 mt-3">

			<label class="radiobtn"><input type="radio" name="flight" value="male">One Way</label>
			<label class="radiobtn"><input type="radio" name="flight" value="male">Round Trip</label>

		</div>


		<!--Second Row-->
		<div class="row">

			<div class="col-sm-6">
				<select class="browser-default custom-select mb-4" id="select" name="countryoff">
        <option value="" disabled="" selected="">From Country/Airport</option>
        <option value="1">Pakistan</option>
        <option value="2">Paris</option>
        <option value="3">Canada</option>
        <option value="4">USA</option>
        <option value="5">Thailand</option>
        <option value="6">Spain</option>
        <option value="7">Europe</option>
        <option value="8">Germany</option>
        <option value="9">Australia</option>
        <option value="10">China</option>
        <option value="11">Turkey</option>
        <option value="12">South Korea</option>
        <option value="13">Greece</option>
        <option value="14">London</option>
        <option value="15">Dubai</option>
        <option value="16">Denmark</option>
        <option value="17">Singapore</option>
        <option value="18">Portugal</option>
        <option value="19">Japan</option>
    </select>
			</div>

			<div class="col-sm-6">
				<select class="browser-default custom-select mb-4" id="select" name="countrycome">
        <option value="" disabled="" selected="">To Country/Airport</option>
        <option value="1">Pakistan</option>
        <option value="2">Paris</option>
        <option value="3">Canada</option>
        <option value="4">USA</option>
        <option value="5">Thailand</option>
        <option value="6">Spain</option>
        <option value="7">Europe</option>
        <option value="8">Germany</option>
        <option value="9">Australia</option>
        <option value="10">China</option>
        <option value="11">Turkey</option>
        <option value="12">South Korea</option>
        <option value="13">Greece</option>
        <option value="14">London</option>
        <option value="15">Dubai</option>
        <option value="16">Denmark</option>
        <option value="17">Singapore</option>
        <option value="18">Portugal</option>
        <option value="19">Japan</option>
    </select>
			</div>

		</div>


		<!--Third Row-->
		<div class="row">

			<div class="col-sm-6">
				<input placeholder="&#xf073; Departing" name="departing" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" >
			</div>

				<div class="col-sm-6">
					<input placeholder="&#xf073; Arriving" name="arriving" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome" >
			</div>

				</div>


				<!--Fourth Row-->
				<div class="row mt-4">

					<div class="col-sm-6">
						<select class="browser-default custom-select mb-4" id="select" name="anything1">
        <option value="" disabled="" selected="">Anytime</option>
        <option value="1">6:00 AM</option>
        <option value="2">3:00 PM</option>
        <option value="3">6:00 PM</option>
    </select>
					</div>

					<div class="col-sm-6">
						<select class="browser-default custom-select mb-4" id="select" name="anyting2">
        <option value="" disabled="" selected="">Anytime</option>
          <option value="1">6:00 AM</option>
        <option value="2">3:00 PM</option>
        <option value="3">6:00 PM</option>
    </select>
					</div>

				</div>
				<!--Fifth Row-->
				<div class="row">

					<div class="col-sm-4">
						<select class="browser-default custom-select mb-4" id="select" name="kids">
        <option value="" disabled="" selected="">Kids(0-14)</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
					</div>

					<div class="col-sm-4">
						<select class="browser-default custom-select mb-4" id="select" name="adults">
        <option value="" disabled="" selected="">Adults(15-64)</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
					</div>

					<div class="col-sm-4">
						<select class="browser-default custom-select mb-4" id="select" name="seniors">
        <option value="" disabled="" selected="">Seniors(65+)</option>
   <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
					</div>



				</div>

				<a href="#" class="btn btn-primary float-right mt-5">Find Flights</a>
			</div>
		</div>
</body>
</html>