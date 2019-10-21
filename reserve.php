<html>
<head>
<?php include 'head.php' ?>
<style>
body{
background-image:url(css/back.jpg);
}    
</style>
</head>
<body> 
<?php include 'navbar.php' ?>
<div class="container">
<div class="row card-panel fade">
<h2 class="thin black-text">Reserve</h2>
<div class="card-content col s6">
<span id="mark"></span>
<form action="insertReserve.php" method="post" name="bookForm" onsubmit="return validateForm(this);">
<div class="input-field">
<input type="text" id="fname" name="fname" class="black-text">
<label class="black-text" for="name">First Name</label>
</div>
<div class="input-field">
<input type="text" id="lname" name="lname" class="black-text">
<label class="black-text" for="lname">Last Name</label>
</div>
<div class="input-field">
<input type="email" id="mail" name="mail" class="black-text">
<label class="black-text" for="mail">Email</label>
</div>
<div class="input-field">
<input type="text" id="address" name="address" class="black-text">
<label class="black-text" for="address">Address</label>
</div>
<div class="input-field">
<input type="text" id="tel" name="tel" class="black-text">
<label class="black-text" for="tel">Phone no.</label>
</div>
<div class="input-field">
<input type="text" id="date" name="date" class="black-text datepicker">
<label class="black-text" for="date">Select Date to Reserve</label>
</div>
<div class="input-field">
<select class="icons">
<option value="" disabled selected>Choose a place</option>
<option value="" data-icon="img/audi.jpg">Auditorium</option>
<option value="" data-icon="img/hall.jpg">Conference Hall</option>
</select>
</div>
<div class="input-field col s6">
<input type="text" id="ftime" name="ftime" class="black-text timepicker">
<label class="black-text" for="ftime">From</label>
</div>
<div class="input-field col s6">
<input type="text" id="ttime" name="ttime" class="black-text timepicker">
<label class="black-text" for="ttime">To</label>
</div>
<input type="submit" value="Check Eligibilty" class="btn blue btn-large" onclick="">
</form><br>
</div>
<div class="col s6">
<div class="card horizontal">
<div class="card-image">
<img src="img/audi.jpg">
</div>
<div class="card-stacked">
<div class="card-content">
<span class="flow-text">Auditorium</span>
<p>Reservation of conference hall is administered by the Maintenance Division of the CNC. </p>
</div>
<div class="card-action">
<a href="#">MORE</a>
</div>
</div>
</div>
<div class="card horizontal">
<div class="card-image">
<img src="img/hall.jpg">
</div>
<div class="card-stacked">
<div class="card-content">
<span class="flow-text">Conference Halls</span>
<p>Reservations of the Auditorium, Conference halls, Lecture hall, Committee rooms and residential facilities</p>
</div>
<div class="card-action">
<a href="#">MORE</a>
</div>
</div>
</div>
</div>
</div>
</div>
<button onclick="topFunction()" id="myBtn" class="btn-floating btn-large blue darken-4"><i class="material-icons">keyboard_arrow_up</i></button>
<?php include 'footer.php' ?>
<?php include 'script.php' ?>
</body>
</html>