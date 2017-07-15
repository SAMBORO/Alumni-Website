<?php

 @session_start();
	  $regid=$_SESSION['regid'];


if(isset($_FILES["file"]["type"]))  
{
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file"]["name"]); 
    $file_extension = end($temporary);

    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
            ) && ($_FILES["file"]["size"] < 52428888)//Approx. 100kb files can be uploaded.
            && in_array($file_extension, $validextensions)) 
	{

        if ($_FILES["file"]["error"] > 0)
		{
            echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
        } 
		else 
		{ 
				if (file_exists("upload/" .$_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
				} 
				else 
				{					
					$sourcePath = $_FILES['file']['tmp_name'];   // Storing source path of the file in a variable
					//$s=rand(10,100);
					$targetPath = "upload/"."$regid.jpg";  // Target path where file is to be stored
					move_uploaded_file($sourcePath,$targetPath) ; //  Moving Uploaded file						
					$savedfile="$regid.jpg";
					
					
					
					//Write to database starts
				
					
	
		 
   
	  include_once('../conn_lock.php');
	  
	  $sqlq = mysqli_query($connect,"select * from personal_detail2 WHERE REGISTRATION_ID='$regid'");
	  if(mysqli_num_rows($sqlq))
{
$row= mysqli_fetch_assoc($sqlq);
	$appStat = $row['appStat'];  
}

 if($appStat<2)	 
 { 

	  $sql = mysqli_query($connect,"UPDATE `personal_detail2`SET `appStat`=2
WHERE REGISTRATION_ID='$regid'" )or die("Update failure:: Data insertion Error.");

 $sql = mysqli_query($connect,"insert into `uploadrecord` (`regid`, `photoPath`, `category`) values ('$regid','$savedfile',1)" )or die("Update failure:: Image Data insertion Error.");

	}
	else
	{
	
	 $sql = mysqli_query($connect,"UPDATE  `uploadrecord`  set photoPath='$savedfile' WHERE regid='$regid' and category=1" )or die("Update failure:: Image Data insertion Error.");
	}  

					
					//Write to database ends
					
					
					
					echo "<span id='success'  >Image Uploaded Successfully...!!</span><br/>";
					echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
					echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
					echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
					echo "<b>Uploaded as file:</b> " . $savedfile. "<br>";
					echo '<br> <a href="../profile_index.html" target="BottomFrame" >Click here to continue</a>';
						
				}				       
        }        
    }   
	else 
	{
        echo "<span id='invalid'>***Invalid file Size or Type***<span>";
    }
}
?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
a:link {
	color: #FFFFFF;
}
a:visited {
	color: #66FFFF;
}
a:hover {
	color: #FFCC00;
}
a:active {
	color: #FFFF99;
}
-->
</style>


