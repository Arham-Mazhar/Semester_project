<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Home</title>
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
</head>
<style>
        body {
    background-color: #2196f3;
}

#background {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
    background-color: rgb(0, 0, 0);
    z-index: 1;
}

#content {
    position: relative;
    z-index: 2;
    padding: 30px;
    text-align: center;
    font-weight: bold;
    font-family: Arial, sans-serif;
}
p{
    border-bottom: 8px solid rgb(255, 255, 255);
    width: 103%;
    margin-left: -28px;
    padding-bottom: 1%;
}
.admin{
    /* border: 2px solid red; */
    font-size: 53px;
    display: flex;
    justify-content: left;
    color: white;
    width: 40%;
    margin-top: 22%;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
.container{
    /* border: 2px solid white; */
    width: 20%;
    height: 80vh;
    margin-top: -25%;
    margin-right: 28%;

}
.container > a{
    display: flex;
    margin-left: 6px;
    padding-top: 44%;
    /* justify-content: right; */
    color: white;
    text-decoration: none;
    font-size: 22px;
    border-bottom: 4px solid rgb(255, 255, 255);
    /* border: 2px solid red; */

}
.container > a:hover{
    cursor: pointer;
    /* font-size: 34px; */
    color: lightblue;
    border-bottom:4px solid rgb(255, 255, 255);
    width: 91%;
}
</style>
<body>
    <div id="content">
        <p style="color: white;font-size:32px;margin-top:-1%;">Wheel <span>THE</span> World</p>
        <h1 class="admin">Admin Panel Control</h1>
        <div class="container">
                  <a  href="add">Add Data</a>
                  <a  href="Admin-Display">View Registered Users</a>
                  <a  href="Admin-Home-Display">View Data Homepage</a>
                  {{-- <a  href="#">View Data</a> --}}
        </div>

    </div>
    <div id="background"></div>
</body>
</html>