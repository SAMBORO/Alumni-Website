<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #006666;
}
-->
</style>
</head>
<body>

<span class="style1">
<?php


$k=0;

	  @session_start();
	  $regid=$_SESSION['regid'];
	  
		  $k=1;
     
	  $photopath=$regid.$_FILES["file"]["name"];
	  include_once('../conn_lock.php');
	  
	  $sqlq = mysqli_query($connect,"select * from personal_detail2 WHERE regid='$regid'");
	  if(mysqli_num_rows($sqlq))
{
$row= mysqli_fetch_assoc($sqlq);
	$appStat = $row['appStat'];  
}

 if($appStat<2)	 
 { 
	  $sql = mysqli_query($connect,"UPDATE `personal_detail2`SET `appStat`=2
WHERE REGISTRATION_ID='$regid'" )or die("Update failure:: Data insertion Error.");

 $sql = mysqli_query($connect,"insert into `uploadrecord` (`regid`, `photoPath`) values ('$regid','$photopath')" )or die("Update failure:: Image Data insertion Error.");
	}
	else
	{
	 
$sql = mysqli_query($connect,"UPDATE  `uploadrecord`  set photoPath='$photopath'(`regid`, `photoPath`) WHERE regid='$regid'" )or die("Update failure:: Image Data insertion Error.");
	}  
	 
	 
	echo 'Your photo is uploaded successfully. Please press <a href="profile_index.html" target="BottomFrame" >Refresh</a> to complete further steps';
	
	  
	

  
?> 
</span>
</body>
</html>

