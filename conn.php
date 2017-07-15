<?php
$dbname="nitaain1_nitaamaster";
$host="localhost";
$username="nitaain1_master";  //mysql username
$password='H0wrah@12'; //mysql password


//$connection = mysqli_connect($host,$username,$password,$dbname)  or die("Server is facing technical problem. Please try after sometime.".mysqli_connect_error());


$connect = mysqli_connect($host,$username,$password,$dbname)  or die("Server is facing technical problem. Please try after sometime.".mysqli_connect_error());
//mysqli_select_db($dbname,$connection) or die("Server is facing technical problem. Please try after sometime..".mysqli_error());






?>