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
$uname = $_SESSION['user'];
$sql = "select * from student where fname='$uname'";
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
<div class="col s5"><h4><?php echo "Welcome, " . $_SESSION['user']; ?></h4>
<table>
<tr><th colspan="3" class="flow-text">Profile</th></tr>
<tr><th>Name</th><td><?php echo $rows['fname'] . " " . $rows['lname']; ?></td></tr>
<tr><th>NIC</th><td><?php echo $rows['nic']; ?></td></tr>
<tr><th>Date of Birth</th><td><?php echo $rows['dob']; ?></td></tr>
<tr><th>Email</th><td><?php echo $rows['email']; ?></td></tr>
<tr><th>Phone</th><td><?php echo $rows['tele']; ?></td></tr>
</table>    
</div>
<div class="col s2 offset-s1"><br><?php echo '<img src="data:image/jpg;base64,' . base64_encode($rows['dp']) . '" class="circle responsive-img"/>' ?></div>
</div><div class="row"><a type="button" class="btn btn-large blue waves-effect darken-4" href="index.php?get=logout">LOG OUT</a><a type="button" class="btn right blue waves-effect darken-4" href="">Edit</a></div></div></div>
<?php include 'footer.php' ?>
<button onclick="topFunction()" id="myBtn" class="btn-floating btn-large blue darken-4"><i class="material-icons">keyboard_arrow_up</i></button>
<?php include 'script.php' ?>
</body>
</html>