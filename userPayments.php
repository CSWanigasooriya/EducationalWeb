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
<?php require 'connect.php';
$sql = "select * from student";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_array($result);
?>
<div class="container">
<div class="card-panel">
<div class="row">
<div class="col s3"><br>
<div class="collection">
<a href="profile.php" class="collection-item black-text">Profile</a>
<a href="userCourse.php" class="collection-item black-text">Your Course</a>
<a href="userPayments.php" class="collection-item black-text">Payments</a>
</div></div>
<div class="col s5"><h4>Your Payements</h4>
<table>
<tr><th colspan="3" class="flow-text">Payments</th></tr>
<tr><th>Name</th><td><?php echo $rows['fname'] . " " . $rows['lname']; ?></td></tr>
<tr><th>Total Fee</th><td><?php echo $rows['nic']; ?></td></tr>
<tr><th>Paid Amount</th><td><?php echo $rows['dob']; ?></td></tr>
</table>    
</div>
</div><div class="row"><a type="button" class="btn btn-large blue waves-effect darken-4" href="index.php?get=logout">LOG OUT</a></div></div></div>
<?php include 'footer.php' ?>
<button onclick="topFunction()" id="myBtn" class="btn-floating btn-large blue darken-4"><i class="material-icons">keyboard_arrow_up</i></button>
<?php include 'script.php' ?>
</body>
</html>