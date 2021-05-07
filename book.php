
<!DOCTYPE html>
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
                <li>Discounts</li>
                <li class="nav-link"><a href="logout">Logout</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Company Intro-->
<div class="container-1">
    <div class="area1">
        <div class="intro">
            <h1 style="margin-bottom: 20px;">Hello, username</h1>
            <hr style=" width: 50%; margin: 0 auto; margin-bottom: 20px;">
            <h1>Rent<br>Ride<br>Commute.</h1>
            <p style="font-family:poppins">Made with ❤️️ for VITians </p>
            <div class="butt1">
                <a href="#" id="button2" class="button">Book Now</a>
                <a href="mybookings" id="button3" class="button">My Bookings</a>
            </div>
        </div>
    </div>
    <div class="area2">
        <img src="images/tt.svg" alt="">
    </div>
</div>
<!--signup-->
<div class="bg-modal2">
    <div class="modal-contents2">
        <div class="close2">+</div>
        <form action="rent_now" method="POST">
        <img src="images/e201fecab309152d4fc871c3cd97fb6d.gif" style="width: 350px; border-radius:20px; margin-bottom:20px">
        <input type="date" placeholder="DD/MM/YYYY" class="form-control" name="date" >
        <select class="select" name="check" >
            <option selected disabled >Start Point</option>
            <option>Main Building</option>
            <option>SMV</option>
            <option>Technology Tower</option>
            <option>SJT</option>
            <option>Men's Hostel</option>
            <option>Health Center</option>
        </select>
        <select class="form-control" name='end' style="cursor: pointer;">
            <option selected disabled >End Point</option>
            <option>Main Building</option>
            <option>SMV</option>
            <option>Technology Tower</option>
            <option>SJT</option>
            <option>Men's Hostel</option>
            <option>Health Center</option>
        </select>
        <input type="time" placeholder="pickup hrs:min" class="form-control" name="cht">
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
{% if user.is_authenticated %}
<script>

document.getElementById('button2').addEventListener("click", function() {
	document.querySelector('.bg-modal2').style.display = "flex";
});
document.querySelector('.close2').addEventListener("click", function() {
	document.querySelector('.bg-modal2').style.display = "none";
});

</script>
{% endif %}

<!-- Modal -->

</body>
</html>