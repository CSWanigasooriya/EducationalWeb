<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn)
{
    die('Could not connect: ' .mysql_error());
}
echo 'Connected successfully'.'<br>';
//mysql_close($conn);
?>