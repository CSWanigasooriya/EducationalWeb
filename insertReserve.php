<?php
//INSERTION OF RESERVATIONS
if ('POST' == $_SERVER['REQUEST_METHOD']) {
require ("connect.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['mail'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$date = strtotime($_POST['date']);
$sdate = date("Y-m-d", $date);
$stime = $_POST['ftime'];
$etime = $_POST['ttime'];
}
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$query = "select id from reserve where reserveDate='$date' or startTime='$stime'";
$sql = "insert into reserve(fname,lname,email,address,phone,reserveDate,startTime,endTime)    
values('$fname','$lname','$email','$address','$tel','$sdate','$stime','$etime')";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);
if ($count == 1) {
echo "<SCRIPT type='text/javascript'>
alert('We are Sorry your date has been occupied already, Please select another date');
window.location.replace('reserve.php');
</SCRIPT>";
} else {
mysqli_query($conn, $sql);
$message = "Welcome,$fname your reservation has been done!";
echo "<SCRIPT type='text/javascript'>
alert('$message');
window.location.replace('index.php');
</SCRIPT>";
}
?>