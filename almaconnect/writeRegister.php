<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #663366;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
<div align="center"><span class="style1">
<p><br><br><br><br><br><br></p>
<p></p>
<?php 
include_once('conn_lock.php');

?>

<?php

//ini_set('date.timezone', 'India/Delhi');

	@$name = $_POST["name"];
	@$email = $_POST["email"];
	@$pass = $_POST["pass"];
	@$secq = $_POST["secq"];
	@$secans = $_POST["secans"];
	@$date = date("d-m-Y");
	$time = date("H:i:s", time());
	//echo "here i am  <br>".$name."<br>".$email;
	$regid=date('ymdhis').rand ( 100, 999 );
	
	//echo "<br>regid:  ".$regid;
	$sql = mysqli_query($connect,"select email from personal_detail1 where email='$email' ");
	@session_start();
	if(mysqli_num_rows($sql))
{

$_SESSION['errmsg']="Attention!! This user id already exists please use another one";
header("Location:application_form2.php");
}
else
{
	$stat=mysqli_query($connect,"INSERT INTO personal_detail1 VALUES('$name','$email','$pass','$secq','$secans',$regid,'$date','$time');")or die("Regsitration failure:: Data insertion Error.");

 if ($stat)	
	echo "You have successfully registered . Login to complete further steps. <a href='loggin_form.php'>Ok</a>";
	
	
	
	else
	echo "Your regsitration is not successful due to technical problem";
}


?>

</span></div>