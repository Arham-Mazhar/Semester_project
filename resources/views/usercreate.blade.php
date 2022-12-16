<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registeration</title>
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
</head>
<style>
    /* body{
        background-color: #000000;
    } */
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
    .container{
        margin-top: 1%;
    margin-left: 12%;
    margin-right: 12%;
    /* margin-bottom: 12%; */
    /* border: 2px solid red; */
    height: 83vh;
    width: 77%;
    background-image: url(https://c4.wallpaperflare.com/wallpaper/994/200/45/foggy-mountain-dark-wallpaper-preview.jpg);
    background-repeat: no-repeat;
    background-size:cover;
    border-radius: 10px;
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
        color: white;
    }
    .login{
        /* border: 2px solid purple; */
        margin-left: 5%;
        margin-top: 10%;
        width: 50%;
        height: 50vh;
    }
    .login > h1{
        font-size: 32px;
        color: rgb(0, 0, 0);
        display: flex;
        justify-content: left;
    }
    .login >h2{
        display: flex;
        justify-content: left;
        margin-top: 3%;
        font-size: 97%;
        color: rgb(0, 0, 0);
        margin-bottom: 4%;
    }
    .login h2 > a{
        color: #0449E9;
        text-decoration: none;
        margin-left: 12px;
    }
    .login h2 > a:hover{
        cursor: pointer;
        border-bottom: 2px solid rgb(0, 0, 0);
        font-size: 15px;
    }
    

    .input1,.input2{
    border: 2px solid black;
    padding: 1%;
    margin-top: 3%;
    width: 52%;
    margin-left: 12px;
    border-radius: 12px;
    background-color: black;
    }
    .input1 > input,.input2 > input{
        margin-top: 2%;
    }
    .input1 > label,.input2 > label{
        color: white;
    font-size: 15px;
    justify-content: left;
    display: flex;
    }
    .input1 > input,.input2> input{
    background: transparent;
    color: white;
    outline: none;
    border: none;
    width: 100%;
    padding: 2%;
    }
    form > button{
        margin-top: 4%;
    width: 50%;
    background-color: #2196f3;
    justify-content: center;
    margin-left: -42%;
    padding: 7px;
    border-radius: 12px;
    border: none;
    font-size: 12px;
    }
    form > button:hover{
        cursor: pointer;
        background-color: #3fa5f8;
        padding: 9px;
    }
    span{
        font-size: 12px;
        color: aqua;
    }

</style>
<body>
    <div id="content">
        <p style="color: white;font-size:32px;margin-top:-1%;">Wheel <span>THE</span> World</p>
        <div class="container">
            {{-- <img src="https://thumbs.dreamstime.com/b/beautiful-nature-background-wallpaper-moody-black-white-landscape-dark-storm-clouds-forest-car-road-out-horizon-169788887.jpg" alt="error"> --}}
            <nav>
            <div class="nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="AboutUS">About US</a></li>
                    <li><a href="ContactUs">Contact US</a></li>
                    <li><a href="Adminlogin">Admin Login</a></li>
                </ul>
            </nav>
             {{-- navend --}}
    
             {{-- login form --}}
            <div class="login">
                <h1>Registration</h1>
                <h2>Alrady Member? <a href="Userlogin">User Login</a></h2>
                <form action="signup" method="POST"  >
                    @csrf
                    <div class="input1">
                        <label for="name">Name:</label><br>
                        <input type="text" name="name" id="name" placeholder="Enter your name"  autocomplete="off" >
                    </div>
                    <div class="input2">
                        <label for="email">Email:</label><br>
                        <input type="email" name="email" id="email" placeholder="Enter your email"  autocomplete="off">
                    </div>
                    <div class="input2">
                        <label for="password">Password:</label><br>
                        <input type="password" name="password" id="password" placeholder="Enter your password"  autocomplete="off">
                    </div>
                    <div class="input2">
                        <label for="DOB">DOB:</label><br>
                        <input style=" color-scheme: dark;" type="date" name="DOB" id="DOB"  autocomplete="off">
                    </div>
                    <div class="input2">
                        <label for="gender">Gender:</label><br>
                        <select style=" color-scheme: dark;border:none;outline:none;width: 50%;margin-left:-47%;padding:2%;  " name="gender" id="gender"  autocomplete="off">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                          </select>
                    </div>
                    <button type="submit">Sign Up</button>
                </form>
            </div>
    
            </div>
    
    </div>
    <div id="background"></div>
    

</body>
</html>