<?php
//INSERTION OF NEW STUDENTS
if('POST' == $_SERVER['REQUEST_METHOD']) {
require("connect.php"); 
$fname = $_POST['fname'];
$lname=$_POST['lname'];
$nic=$_POST['nic'];
$email=$_POST['mail'];
$dob=strtotime($_POST['dob']);
$edate=date("Y-m-d",$dob);
$tel=$_POST['tel'];
$crs=$_POST['crs'];
$user=$_POST['user'];
$pass=$_POST['pass'];
}
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql="insert into student(fname,lname,nic,dob,email,tele,crsName,userName,password)    
values('$fname','$lname','$nic','$edate','$email','$tel','$crs','$user','$pass')";
$query="select * from student where userName='$user'";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
if($count == 1) {
echo "<SCRIPT type='text/javascript'>
window.location.replace('register.php');
alert('Your Username is Already Taken!');
</SCRIPT>";
}else {    
mysqli_query($conn,$sql);
$_SESSION['user'] = $fname;
$_SESSION['user_logged_in'] = true;
echo "<SCRIPT type='text/javascript'>
window.location.replace('profile.php');
</SCRIPT>";
}

mysqli_close($conn);
?>