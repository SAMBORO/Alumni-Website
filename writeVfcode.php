<?php

include_once('conn.php');

@session_start();

$mobNumber = htmlentities($_POST['mobNumber'], ENT_QUOTES, 'UTF-8');
$vfCode=rand(10000, 99999);
echo $mobNumber;
echo $vfCode;
$_SESSION['mobno']=$mobNumber;
$_SESSION['vfCode']=$vfCode;

$stat=mysql_query("INSERT INTO mob_verify VALUES('$mobNumber','$vfCode','0');")or die("Data insertion Error.");

$smssent='http://bhashsms.com/api/sendmsg.php?user=9436459622&pass=9485bca&sender=NITAAL&phone='.$mobNumber.'&text=Registration Verification Code: '.$vfCode.' &priority=ndnd&stype=normal';
header('Location:'. $smssent);




?>