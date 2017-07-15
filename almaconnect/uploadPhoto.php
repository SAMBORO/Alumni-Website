<?php
$uid=$_SESSION['uid'];
$path="";
    if(isset($_REQUEST['upload']))
    {echo $_FILES['myfile']['type'];
        if($_FILES['myfile']['error']==0)
        {
            if($_FILES['myfile']['type']==="image/jpeg"||"image/png")
            {
            $source=$_FILES['myfile']['tmp_name'];
            $des=$_SERVER['DOCUMENT_ROOT']."/nitaa/almaconnect/Upload/".$_FILES['myfile']['name'];
            
            if(move_uploaded_file($source,$des))
            {
                $path="upload/".$_FILES['myfile']['name'];
                $pa="almaconnect/Upload/".$_FILES['myfile']['name'];
                include_once('../conn.php');  
                $sql1 = mysqli_query($connect,"UPDATE profile_master SET alm_prim_photo='$pa' WHERE uniqid_no='$uid'");
        
            } 
            else
            {
                echo "Error in Uploading the file";
            }
            }
            else 
                echo "Invalid File Format";
        }
        else
        {
            echo "File is Currpated....";
        }
    }
?>
<html>
    <head>
        
<style type="text/css">
#form1 {
	border: thin solid #006699;
	color: #FFFFFF;
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #006666;
}
body {
	background-color: #3e7cbb;
}
.style2 {color: #FFFFFF}
</style>

        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data" id="form1" name="form1">
            <p align="center"><img src="<?php echo $path; ?>" width="200" height="260"/></p>
            <p>&nbsp;</p>
          
            <div class="style1" id="us" align="center">
                <label for="file"><span class="style2">
                        Select Image :</span></label>
                <span class="style2">
                <input type="file" name="myfile" />
                <br>
             <input type="submit" value="Upload" name="upload" />
                </span>
            </div>
           
        </form>
    </body>
</html>
