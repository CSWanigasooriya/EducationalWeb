   <?php
       
    if('POST' == $_SERVER['REQUEST_METHOD']) {
    require("connect.php"); 
	$fname = $_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['mail'];
    $dob=strtotime($_POST['dob']);
    $edate=date("Y-m-d",$dob);
    $address=$_POST['address'];
    $tel=$_POST['tel'];
    $date=strtotime($_POST['date']);
    $sdate=date("Y-m-d",$date);
    $stime=$_POST['ftime'];
    $etime=$_POST['ttime'];
try{
    $query="insert into reserve(fname,lname,email,dob,address,phone,reserveDate,startTime,endTime)    
values('$fname','$lname','$email','$edate','$address','$tel','$sdate','$stime','$etime')";
$dbname->exec($query);
	 $message = "Welcome,$fname your reservation has been done!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    include 'index.php';
}
catch(Exception $e) {
 echo '<div class="alert-warning" > ';
  echo $e->getMessage();
    }}
?>