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

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/jpg"))
&& ($_FILES["file"]["size"] < 2000000))
  {
	  
  if ($_FILES["file"]["error"] > 0)
    {
		
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else	
    {
    
    if (file_exists("uploadPhoto/" . $_FILES["file"]["name"]))
      {
		  
      echo $_FILES["file"]["name"] . " Already exists. ";
      }
    else
      {
	  @session_start();
	  $regid=$_SESSION['regid'];
	  
		  $k=1;
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploadPhoto/" . $regid.$_FILES["file"]["name"]);
	  //Update db entry
	  $photopath=$regid.$_FILES["file"]["name"];
	  include_once('conn_lock.php');
	  
	  $sqlq = mysqli_query($connect,"select * from personal_detail2 WHERE REGISTRATION_ID='$regid'");
	  if(mysqli_num_rows($sqlq))
{
$row= mysqli_fetch_assoc($sqlq);
	$appStat = $row['appStat'];  
}

 if($appStat<2)	 
 { 
	  $sql = mysqli_query($connect,"UPDATE `personal_detail2`SET `appStat`=2, photoPath='$photopath'
WHERE REGISTRATION_ID='$regid'" )or die("Update failure:: Data insertion Error.");
	}
	else
	{
	 $sql = mysqli_query($connect,"UPDATE `personal_detail2`SET photoPath='$photopath'
WHERE REGISTRATION_ID='$regid'" )or die("Update failure:: Data insertion Error.");
	}  
	 
	 
	echo 'Your photo is uploaded successfully. Please press <a href="profile_index.html" target="BottomFrame" >Refresh</a> to complete further steps';
	
	  
	  
	        }
    }
  }
else
  {
	  
  echo "Invalid file";
  }
  

  
?> 
<img src="<?php if($k==1) echo("uploadPhoto/" .$regid. $_FILES["file"]["name"]); else echo("upload/error.jpg");  ?>" /></span>
</body>
</html>

