<html>
<head>
<?php include 'head.php' ?>
<style>
    body{
        background-image:url(css/book.jpg);
    }    
</style>
</head>
    <body> 
<?php include 'navbar.php' ?>
<div class="container">
<div class="row card-panel fade">
<h2 class="thin amber-text">Register</h2>
<div class="card-content col s6">
<span id="mark"></span>
<form action="insert.php" method="post" name="regForm" onsubmit="return validateForm()">
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
<input type="text" id="dob" name="dob" class="black-text datepicker">
<label class="active black-text" for="dob">Date of Birth</label>
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
<div class="page-footer transparent">
<div class="container">
<div class="row">
<div class="card grey lighten-4 z-depth-1 hoverable">
<div class="card-content">
<span class="flow-text card-title teal-text">Let's Get In Touch!</span><a class="btn-floating halfway-fab z-depth-1 hoverable waves-effect waves-light"><i class="material-icons">attachment</i></a><p class="grey-text"><big>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</big></p></div>
<div class="card-action">
<a href="#">Phone</a>
<a href="#">E-mail</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
        </div>
    <?php include 'footer.php' ?>
    <?php include 'script.php' ?>
    </body>
</html>