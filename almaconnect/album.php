<body bgcolor='lightblue'>
<?php 
@session_start();
if($_SESSION['uid'])
$uid=$_SESSION['uid'];
else echo"<div align='center'><strong>your session expires Please Login Again</strong></div>";	
include('../conn.php');
$rec=mysqli_query($connect,"select `alcreate` from `profile_master` where alm_uid='$uid' ");
$data=mysqli_fetch_row($rec);
/* if album name does not exist move to else part to create a album name*/

if($data[0]!=""){
	echo "<table height='100%'width='100%'><tr><td><div align='center'><font color='brown'><h1>WELCOME TO PHOTO GALLERY</h1></font></div><tr><td width='100%' height='60%'>";
	 
	      $g=opendir("Upload/$uid/");
		  while($pname=readdir($g))
		  { 
	  $k=strrchr($pname,".");
	  if(($k==(".jpg"))||($k==(".png"))||($k==(".jpeg"))){
		 echo <<<ab
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Upload/$uid/$pname" height='200'width='18%'>
ab;
	  } }	
		 if(isset($_POST['upl'])){
			  
			 	$finame=$_FILES['alphoto']['name'];
	            $fitname=$_FILES['alphoto']['tmp_name'];
				$filesiz=$_FILES['alphoto']['size'];
				if($filesiz < 2000000){
	            if(move_uploaded_file($fitname,"Upload/$uid/".$finame))
	          { 
		  echo <<<ab
<img src="Upload/$uid/$finame" height='200'width='18%'>
ab;
		 /*  header("location:album.php");*/
         		   }	
    
    else echo "<tr><td><b>Choose a Photo</b>";
	
		 }
		 else echo "Please Select a Size Less Than 2Mb";
			 
		 }
	      echo "<form method='post' action='' enctype='multipart/form-data'>";
	      echo "<tr><td><div align='center'><input type='file' name='alphoto'>";
	      echo "<input type='submit' value='UPLOAD' name='upl'></div></form>";
	     
}

else { 
        mysqli_query($connect,"UPDATE `profile_master` SET `alcreate`='ok' WHERE alm_uid='$uid'");
          mkdir("Upload/$uid");
	
		  header("location:album.php");
	  }
	  
     
	
?>
</body>