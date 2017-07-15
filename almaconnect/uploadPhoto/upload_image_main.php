<html>
    <head>
        <title>Upload Photo</title>
        <link rel="stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="script_photoUpload.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #3E7CBB;
}
-->
</style></head>
    <body> 
	
	<?php 
   
 @session_start();  
include_once('../conn_lock.php');
$photopath ='../uploadPhoto/no-photo.gif';
$regid=$_SESSION['regid'];
$sql = mysqli_query($connect,"select * from uploadrecord where regid='$regid' and category=1");

if(mysqli_num_rows($sql))
{

//$_SESSION['user']=$username;
$row= mysqli_fetch_assoc($sql);
//echo $row['NAME_FATHER'];
if($row['photoPath']!=NULL)
$photopath ='../uploadPhoto/upload/'. $row['photoPath'];
else
$photopath ='../uploadPhoto/no-photo.gif';

 }  
  else
{

echo 'Attention!! No data to update';

//header("Location:personal_detail.php");
}

 ?>
		<div class="main">
        <h1> Upload your photo </h1>
        <br/>
		<hr>
            <form id="uploadimage" action="writeImgtoDB.php" method="post" enctype="multipart/form-data">
				<div id="image_preview"><img id="previewing" src="<?php echo $photopath; ?>" width="240" height="225" /></div>	
        <hr id="line">    
			<div id="selectImage">
				<label>Select Your Image</label><br/>
				
                <input type="file" name="file" id="file" required />
				<input type="submit" value="Upload" class="submit" />
            </div>                   
			</form>		
		</div> 
		<h4 id='loading' style="display:none;position:absolute;top:50px;left:850px;font-size:25px; ">loading...</h4>
		<div id="message" > 			
        </div>
      </body>
</html>           
              
             
                     
             
           

