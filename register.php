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
<h2 class="thin black-text">Register</h2>
<div class="card-content col s6">
<span id="mark"></span>
<form action="insertStudent.php" method="post" name="regForm" onsubmit="return validateForm(this);">
<div class="input-field">
<input type="text" id="fname" name="fname" class="black-text">
<label class="black-text" for="name">First Name</label>
</div>
<div class="input-field">
<input type="text" id="lname" name="lname" class="black-text">
<label class="black-text" for="lname">Last Name</label>
</div>
<div class="input-field">
<input type="text" id="nic" name="nic" class="black-text">
<label class="black-text" for="nic">NIC Number</label>
</div>
<div class="input-field">
<input type="email" id="mail" name="mail" class="black-text">
<label class="black-text" for="mail">Email</label>
</div>
<div class="input-field">
<input type="text" id="dob" name="dob" class="black-text datepicker">
<label class="active black-text" for="dob">Date of Birth</label>
</div>
<div class="input-field">
<input type="text" id="tel" name="tel" class="black-text">
<label class="black-text" for="tel">Phone no.</label>
</div>
<div class="input-field">
<select class="icons" name="crs">
<option value="" disabled selected>Select a Course</option>
<option value="English" data-icon="img/m_24.png">English</option>
<option value="IT" data-icon="img/3.png">IT</option>
<option value="Tamil" data-icon="img/u.png">Tamil</option>
</select>
</div>
<div class="input-field">
<input type="text" id="user" name="user" class="black-text">
<label class="black-text" for="user">User Name</label>
</div>
<div class="input-field">
<input type="password" id="pass" name="pass" class="black-text">
<label class="black-text" for="pass">Password</label>
</div>
<div class="input-field">
<input type="password" id="cpass" name="cpass" class="black-text">
<label class="black-text" for="cpass">Confirm Password</label>
</div>
<input type="submit" class="btn btn-large blue darken-4" value="REGISTER">
</form>
<a class="blue-text text-darken-2" href="signIn.php">Do you have an account?</a>
</div>
<div class="col s6">
<div class="card-content">
<span class="flow-text card-title teal-text">Join us to become a professional.</span>
<p class="grey-text"><big>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</big></p>
<div class="card-panel">
<h4 class="card-title black-text thin">Now you can reserve our halls too!</h4>
<p class="black-text thin">Reservations of the Auditorium, Conference halls, Lecture hall, Committee rooms and residential facilities</p>
<a type="button" href="reserve.php" class="btn btn-large blue">Reserve</a>
</div>
</div>
<hr class="divider">
<div class="row">
<div class="col s6">
<div class="card small z-depth-4">
<div class="card-image waves-effect waves-block waves-light">
<img class="activator" src="img/m_24.png">
</div>
<div class="card-content">
<span class="card-title activator grey-text text-darken-4">English Language<i class="material-icons right">more_vert</i></span>
<p><a href="courses.php">More</a></p>
</div>
<div class="card-reveal">
<span class="card-title grey-text text-darken-4">English Language<i class="material-icons right">close</i></span>
<p>Here is some more information about this product that is only revealed once clicked on.</p>
</div>
</div>
</div> 
<div class="col s6">
<div class="card small z-depth-4">
<div class="card-image waves-effect waves-block waves-light">
<img class="activator" src="img/3.png">
</div>
<div class="card-content">
<span class="card-title activator grey-text text-darken-4">IT<i class="material-icons right">more_vert</i></span>
<p><a href="courses.php">More</a></p>
</div>
<div class="card-reveal">
<span class="card-title grey-text text-darken-4">IT<i class="material-icons right">close</i></span>
<p>Here is some more information about this product that is only revealed once clicked on.</p>
</div>
</div>
</div>
</div>  
<a type="button" class="btn bnt-large blue darken-4" href="courses.php">VIEW MORE</a>
</div>
</div>
</div>
<button onclick="topFunction()" id="myBtn" class="btn-floating btn-large blue darken-4"><i class="material-icons">keyboard_arrow_up</i></button>
<?php include 'footer.php' ?>
<?php include 'script.php' ?>
</body>
</html>