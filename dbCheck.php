<?php
//CHECK FOR DUPLICATE USERNAMES
require 'connect.php';
$myusername =$_POST['user'];
$mypassword = $_POST['password']; 
$sql = "SELECT fname FROM student WHERE userName = '$myusername' and password = '$mypassword'";
$result = mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count == 1) {
$_SESSION['user'] = $rows['fname'];
$_SESSION['user_logged_in'] = true;
echo "<SCRIPT type='text/javascript'>
window.location.replace('profile.php');
</SCRIPT>";
}else {
echo "<SCRIPT type='text/javascript'>
window.location.replace('signIn.php');
alert('Your User Name or Password is Invalid');
</SCRIPT>";
}
?>