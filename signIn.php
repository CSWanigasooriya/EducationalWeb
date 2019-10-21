<html>
<head>
<?php include 'head.php'; ?>
<style>
body{
background-image:url(css/back.jpg);
}    
</style>
</head>
<body>
<?php  ?>
<?php include 'navbar.php' ?>
<div class="container">
<div class="card-panel fade">
<div class="card-content white-text" id="acard">
<h4 class="card-title black-text thin">Now you can reserve our halls too!</h4>
<a type="button" href="reserve.php" class="btn btn-large blue">Click Here</a>
</div>
<h2 class="thin black-text">Sign in</h2>
<div class="row">
<div class="card-content col s8">
<span id="mark"></span>
<form action="dbCheck.php" method="post" name="signForm" onsubmit="return validateForm(this)">
<div class="input-field">
<input type="text" id="fname" name="user" class="black-text">
<label class="black-text" for="name">User Name</label>
</div>
<div class="input-field">
<input type="password" id="lname" name="password" class="black-text">
<label class="black-text" for="lname">Password</label>
</div>
<input type="submit" value="Sign in" class="btn blue btn-large darken-4" href="dbCheck.php" onclick="">
<a href="register.php" class="right">Are you a new user?</a>
</form>
</div>
</div>
</div>
</div>
<?php include 'footer.php' ?>
<?php include 'script.php' ?>
</body>
</html>