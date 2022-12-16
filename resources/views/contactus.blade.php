<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="https://www.pngitem.com/pimgs/m/461-4610467_w-logo-design-png-transparent-png.png">
</head>
<style>
    body {
    background-image:url('https://images.unsplash.com/photo-1503220317375-aaad61436b1b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTF8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80');
    background-repeat: no-repeat;
    background-size: cover;
}

#background {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 50%;
    height: 100%;
    background-color: rgb(255, 255, 255);
    z-index: 1;
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

#content {
    position: relative;
    z-index: 2;
    padding: 30px;
    text-align: center;
    font-weight: bold;
    font-family: Arial, sans-serif;
}
span{
        font-size: 12px;
        color: aqua;
    }
.contactus{
    /* border: 2px solid red; */
    width: 50%;
    margin-top: 8%;
}
.contactus > h1{
    font-size: 32px
}
.contactus>p{
    font-size: 12px;
}
.contactus form >input{
    width: 70%;
    padding: 3%;
    margin-top: 3%;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
}
.contactus form textarea{
    margin-top: 3%;
    width: 76%;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
}
.contactus form >button{
    margin-top: 4%;
    width: 50%;
    background-color: #2196f3;
    justify-content: center;
    /* margin-left: -42%; */
    padding: 7px;
    border-radius: 12px;
    border: none;
    font-size: 12px;
}
.contactus form > button:hover{
        cursor: pointer;
        background-color: #3fa5f8;
        padding: 9px;
    }
</style>
<body>
    <div id="content">
        <p style="color: rgb(0, 0, 0);font-size:32px;margin-top:-1%;">Wheel <span>THE</span> World</p>
        <nav>
            <div class="nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="AboutUS">About US</a></li>
                    <li><a href="ContactUs">Contact US</a></li>
                    {{-- <li><a href="Adminlogin">Admin Login</a></li> --}}
                </ul>
            </nav>
            <div class="contactus">
                <h1>Contact Us</h1>
                <p>We are always be here to help you and guide you. We always have focous on customer<br>comfort and their security. You can contact us if you have any query regarding our <br> trips and packeges.</p>
                <form action="contact">
                    <input type="text" name="name" id="name" placeholder="Enter valid name"><br>
                    
                    <input type="email" name="email" id="email" placeholder="Enter valid email"><br>
                  
                    <input type="tel" name="phone" id="phone" placeholder="Enter valid P.No"><br>

                    <input type="date" name="date" id="date"><br>

                    <textarea name="textarea" id="textarea" cols="70" rows="8" placeholder="Enter your message"></textarea><br>

                    <button type="submit">Submit</button>

                </form>
            </div>
    </div>
    <div id="background"></div>
</body>
</html>