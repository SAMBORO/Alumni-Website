<?php

include_once('../conn.php');

@session_start();


$username = htmlentities($_POST['mobNumber'], ENT_QUOTES, 'UTF-8');
$pass= htmlentities($_POST['passcode'], ENT_QUOTES, 'UTF-8');





$sql = mysqli_query($connect,"select `uniqid_no`, `usertype`, `alm_name`, `alm_uid`, `otp`,`alm_ug_dept` from profile_master where alm_uid='$username' AND otp='$pass' ");
if(mysqli_num_rows($sql))
{
//$_SESSION['user']=$username;
$row= mysqli_fetch_assoc($sql);
$_SESSION['uniqid']=$row['uniqid_no'];
$_SESSION['user']=$row['alm_name'];/*
$_SESSION['dept']=$row['alm_ug_dept'];*/
$_SESSION['validuser']=$row['usertype'];
$_SESSION['uid']=$row['alm_uid'];

header("Location:profile_index.html");

}
else
{

$msg="Attention!! Wrong user name or password";
$_SESSION['errmsg']=$msg;
$_SESSION['validuser']=0;
header("Location:login_1.php");
}



?>