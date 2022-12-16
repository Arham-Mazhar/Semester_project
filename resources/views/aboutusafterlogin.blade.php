<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
</head>
<style>
    body {
        background-image:url('https://wallpaperaccess.com/full/254381.jpg');
    background-repeat: no-repeat;
    /* background-size: cover; */
    background-position: 10%;
    background-position-y: 21%;
}


#background {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
    background-color: #ffffff;
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
.nav ul{
        list-style-type: none;
        display: flex;
        justify-content: center;
       
        
    }
    .nav ul li{
        /* border: 3px solid green; */
        width: 10%;
        padding: 1%;
        margin-left: 20px;
        text-align: center;
    }
    .nav ul li a{
        text-decoration: none;
        width: 10%;
        color: rgb(0, 0, 0);
        font-weight: bold;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    .nav ul li a:hover{
        cursor: pointer;
        font-size: 15px;
        color: rgb(87, 82, 82);
    }
    span{
        font-size: 12px;
        color: aqua;
    }
</style>
<body>
    <div id="content">
        <p style="color: rgb(0, 0, 0);font-size:32px;margin-top:-1%;">Wheel <span>THE</span> World</p>
        <nav>
            <div class="nav">
                <ul>
                    <li><a href="Homelogin">Home</a></li>
                    <li><a href="AboutUSlogin">About US</a></li>
                    <li><a href="ContactUslogin">Contact US</a></li>
                    {{-- <li><a href="Adminloginlogin">Admin Login</a></li> --}}
                </ul>
            </nav>

            <div class="aboutus"></div>
    </div>
    <div id="background"></div>
</body>
</html>