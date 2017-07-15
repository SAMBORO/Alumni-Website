<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
<style type="text/css">
<!--
.style1 {
	color: #660099;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>

<body>

	
											
											
											
											                         <?php 
											@session_start();
											include_once('../conn.php');	
						  
if(isset($_POST['Submit']))
{ 
  
$msg = $_POST['textarea']; 
/*$dept=$_SESSION['dept'];*/
$name=$_SESSION['user']; 
$uniqid=$_SESSION['uniqid'];
$dept =$_SESSION['dept'];
$batch="2003";
$imgpath="na";
@$date = date("d-m-Y");
	$time = date("H:i:s", time());
	//echo "here i am  <br>".$name."<br>".$email;
	$msgid=date('ymdhis').rand ( 1000, 9999 );
//and (alm_ug_dept like %'$dept'% ) and alm_name like %'$name'% and alm_postaladdress like %'$region'%
$sql = mysqli_query($connect,"INSERT INTO `wallpost`(`msgid`, `alm_name`, `alm_id`, `alm_dept`,`alm_batch`, `txtMsg`, `imgMsgpath`, `msgtime`, `msgDate`) VALUES ('$msgid','$name','$uniqid','$dept','$batch','$msg','$imgpath','$time','$date') " )or die("Database fetch error.");




} 
//mysqli_close($connect);   or alm_pg_dept='$dept' or alm_phd_dept='$dept'
?>   
<?php
if($_SESSION['uid'])
$uid=$_SESSION['uid'];
else echo"<strong>your session expires ,Please Login Again</strong>";
include_once('../conn.php');
$sql = mysqli_query($connect,"select *from profile_master where alm_uid='$uid'");
$rec=mysqli_fetch_row($sql);

?>	
<fieldset style="border:2px solid gray; margin:5px 15px 5px 15px; border-radius:12px;">

<legend style="text-align:center;background-color:lightblue;border-radius:15px;">Profile Detail</legend>
<div style="margin-top:10px;margin-bottom:10px; font-size:20px;">	
<section style="width:800px; float:left; margin-left:10px;">
				<section style="float:left; margin-left:5px;"><label>Name :&nbsp&nbsp</label><?php echo $rec[3]; ?>
				<br><label>Email Id :&nbsp&nbsp</label><?php echo $rec[20]; ?>
				<br><label>Current City :&nbsp&nbsp</label><?php echo $rec[23]; ?></section>
							
				<section style="float:right;"><label>Department :&nbsp&nbsp</label><?php echo $rec[8]; ?>
				<br><label>Mobile No. :&nbsp&nbsp</label><?php echo $rec[18]; ?>
				<br><label>D.O.B. :&nbsp&nbsp</label><?php echo $rec[30]; ?></section>
</section>			
<section style="float:right; margin:1px 8px 5px 0px; border-radius:15px;"><img src='<?php echo "../almaimage/$rec[17]"; ?>' height='120'width='100'></section>
</div>	
</fieldset>								
<div class="col-md-12">
		
                    <div class="panel panel-danger">
						
                        <div class="panel-heading">
                            Post your message
                        </div>
                        <div class="panel-body">
                            <form id="form1" name="form1" method="post" action="">
                              <label>
                                <textarea name="textarea" cols="100"></textarea>
                              </label>
                              <p>
                                <label>
                                <input type="submit" name="Submit" value="Submit" />
                                </label>
                              </p>
                            </form>
                            
                      </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
            </div>
			
			
			
			<div class="col-md-12">
                    <div class="panel panel-success">
					
					
                        <div class="panel-heading">
                           Wall Posts
                        </div>
                        <div class="panel-body">
						
						
					<?php
					
					
					$sql1 = mysqli_query($connect,"select * from wallpost order by `auh` desc");
$count=1;

while($row1= mysqli_fetch_assoc($sql1))
{

if($count==1)
{
echo '<div class= "alert alert-warning">'.$row1['alm_name'].' of '.$row1['alm_dept'].' - '.$row1['alm_batch']. ' said <br><strong>'.$row1['txtMsg'].'</strong><br>'.' on '.$row1['msgDate'].' at '.$row1['msgtime'].' </div>';
$count=2;
}
else
{
echo '<div class= "alert alert-info">'.$row1['alm_name'].' of '.$row1['alm_dept'].' - '.$row1['alm_batch']. ' said <br><strong>'.$row1['txtMsg'].'</strong><br>'.' on '.$row1['msgDate'].' at '.$row1['msgtime'].' </div>';
$count=1;
}

}

					?>
                            
						
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
            </div>
<div align="center" class="style1">
  
</body>
</html>
