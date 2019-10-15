<html>
<head>
<?php include 'head.php' ?>
</head>
    <body>
    <?php include 'navbar.php' ?>
<div class="container">
    <div class="row">
<div class="card-content col s6">
<form action="reserve.php" method="post" name="reg">
<div class="input-field">
<input type="text" id="fname" name="fname" class="grey-text">
<label class="" for="name">First Name</label>
</div>
<div class="input-field">
<input type="text" id="lname" name="lname" class="grey-text">
<label class="" for="lname">Last Name</label>
</div>
<div class="input-field">
<input type="email" id="mail" name="mail" class="validate grey-text">
<label class="" for="mail">Email</label>
</div>
<div class="input-field">
<input type="text" id="dob" name="dob" class="grey-text datepicker">
<label class="active" for="dob">Date of Birth</label>
</div>
<div class="input-field">
<input type="text" id="address" name="address" class="grey-text">
<label class="" for="address">Address</label>
</div>
<div class="input-field">
<input type="text" id="city" name="city" class="grey-text">
<label class="" for="city">City</label>
</div>
<div class="input-field">
<input type="text" id="tel" name="tel" class="grey-text">
<label class="" for="tel">Phone no.</label>
</div>
<div class="input-field">
<input type="text" id="date" name="date" class="grey-text datepicker">
<label class="" for="date">Select Date to Reserve</label>
</div>
<div class="input-field col s6">
<input type="text" id="ftime" name="ftime" class="grey-text timepicker">
<label class="" for="ftime">From</label>
</div>
<div class="input-field col s6">
<input type="text" id="ttime" name="ttime" class="grey-text timepicker">
<label class="" for="ttime">To</label>
</div>
<input type="submit" value="Submit to Check Eligibilty" class="btn blue btn-large" onclick="Materialize.toast('Redirecting', 4000,'',function(){alert('Your toast was dismissed')})">
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