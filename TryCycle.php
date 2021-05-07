
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TryCycle</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    
    
</head>
<body>
    <!-- nav-bar-->
<div class="navbar">
    <div class="wrapper">
        <div id="logo">
            <h1>TRYCYCLE</h1>
        </div>
        <div class="header">
            <ul id="box">
                <li>Home</li>
                <li>Features</li>
                <li>Checkpoints</li>
                <li>Contact</li>
                <li><a href="bicycle" target="_blank">Cycle</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>

<!-- Company Intro-->
<div class="container-1">
    <div class="area1">
        <div class="intro">
            <h1 style="margin-bottom: 20px;">Welcome</h1>
            <hr style=" width: 50%; margin: 0 auto; margin-bottom: 20px;">
            <h1>Rent<br>Ride<br>Commute.</h1>
            <p style="font-family:poppins">Made with ❤️️ for VITians </p>
           <div class="butt">
                <a href="#" id="button" class="button">SignIn</a>
                <a href="#" id="button1" class="button">SignUp</a>
            </div>
        </div>
    </div>
    <div class="area2">
        <img src="images/tt.svg" alt="">
    </div>
</div>
<div class="bg-modal">
    <div class="modal-contents">
        <img src="images/login.jpg" alt=""  style="width: 400px;">
        <div class="close">+</div>
<!--signin-->
        <form action="login" method="POST">
            <input type="text" placeholder="Username" name='username'>
            <input type="password" placeholder="Password" name='password'>
            <button href="#" id="button" class="button" type="submit">Submit</button>
        </form>

    </div>
</div>
<!--signup-->
<div class="bg-modal1">
    <div class="modal-contents1">
        <div class="close1">+</div>
        <h1>Sign Up</h1>
        <form action="register" method="POST">
            <input type="text" placeholder="Username" name="username">
            <input type="text" placeholder="Full Name" name="full_name">
            <input type="password" placeholder="Password" name="password1">
            <input type="password" placeholder="Confirm-password" name="password2">
            <button href="#" id="button" class="button" type="submit">Submit</button>
        </form>
    </div>
</div>
<!-- About us-->
<div class="focus">    
    <div class="about_us">
        <div class="heading">
            <h1 id="line">ABOUT US</h1>
        </div>
        <p>We bring before you a healthy way to travel , so even if you wake up late for a class, you can rely on us to get there in time</p>
    </div>
    <div class="gridbox">
        <div id="box">
            <h1>Why choose us?</h1>
        </div>
        <div id="box">
            <h1>Better travel solution</h1>    
        </div>
        <div id="box">
            <h1>Save Enviornment</h1>   
        </div>
        <div id="box1">
            <p>Existing travel facility,i.e shuttle is expensive and is usually crowded, we use a special algorithm to compute the cost</p> 
        </div>
        <div id="box1">
            <p>Existing travel facility,i.e shuttle is expensive and is usually crowded, we use a special algorithm to compute the cost</p>
        </div>
        <div id="box1">
            <p>We will provide you with all the amnities you need, we are determined to bring to you an hassle free experience</p>
        </div>
    </div>
</div>
<!-- Features -->
<div class="focus-feature">    
    <div class="about_us">
        <div class="heading">
            <h1 id="line">FEATURES</h1>
        </div>
        <p>We present before you all the amenities we will be providing you!!</p>
        <div class="features">
            <div id="heading1">
            <h1>Economical</h1>
            <p>We use a special algorithm, to compute cost which is far more less than the shuttle pricing, existing nowdays.</p>
            </div>
            <div id="heading1">
                <h1>Eco-friendly</h1>
                <p>This plan will also contribute to the betterment of the environment becaue The Earth is what we all have in common.</p>
            </div>
            <div id="heading1">
                <h1>Healthy</h1>
                <p>Sitting infront of laptops and barely doing any physical excercise, it will also help build your health.</p>
            </div>
            <div id="heading1">
                <h1>Instant Booking</h1>
                <p>All you need to do is visit our website, login and rent a bicycle and within minutes you are ready.</p>
            </div>
            <div id="heading1">
                <h1>Checkpoints</h1>
                <p>We know how widespread our campus is, so to keep up we have made few places our pickup and drop points.</p>
            </div>
            <div id="heading1">
                <h1>Flexible Timings</h1>
                <p>Worry not if your FFCS went wrong,you will always be provided with a bicycle.</p>
                <p></p>
            </div>
        </div>
    </div>
</div>
<div class="focus">
    <h1 style="font-family:poppins" >CHECKPOINTS</h1>
    <br>
    <img src="images/map.png" alt="" style="max-width: 100%; border-radius:25px">
</div>

<script>
document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});
document.getElementById('button1').addEventListener("click", function() {
    document.querySelector('.bg-modal1').style.display = "flex";
    
});
document.querySelector('.close1').addEventListener("click", function() {
	document.querySelector('.bg-modal1').style.display = "none";
});
</script>

</body>
</html>