<?php

$dbase="nitaa";
$host="localhost";
$users="root";  //mysql username
$passwd='howrah12'; //mysql password

$db_connect =  mysqli_connect($host,$users,$passwd,$dbase) or die("Server is facing technical problem. Please try after sometime3.".mysqli_error());
//echo "Connected successfully";



?>
