<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #006666;
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
.style6 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; }
.style7 {color: #66FFFF}
.style8 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
	font-weight: bold;
}
a:link {
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #FFFF00;
}
a:active {
	color: #00FFFF;
}
.style9 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #CCCCCC;
	font-size: 12px;
}
-->
</style></head>

<body leftmargin="0" rightmargin="0">
<table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0">
  <tr>
    <td><div align="left"><span class="style1">Welcome   <span class="style7">
      <?php @session_start();
	echo $_SESSION['user'];
	/*if($_SESSION['validuser']==1)
	{	
	 echo $_SESSION['user'];
	 }
	 else
	 {
	 header("Location:loggin_form.php");
	 }
	 */
	 
	 ?>
      </span><br>
      <br>
	  <div align="center"><span class="style8"><a href="logout.php" target="BottomFrame">Log Out</a></span></div>
    </span></div></td>
  </tr>
  
  <tr>
    <td bgcolor="#009191"><div align="center"><span class="style1" ><a href="../masterSearch/mastersearch.php" target="mainFrame">Search Alumni</a> <img src="img/preview.png" width="25" height="25" /> </span></div></td>
  </tr>
  
  <?php

include_once('../conn.php');
$appstat=4;
/*$regid=$_SESSION['regid'];
$sql = mysql_query("select registration_id,appStat from personal_detail2 where registration_id='$regid'");
if(mysql_num_rows($sql))
{
$row= mysql_fetch_assoc($sql);
$appstat=$row['appStat'];
}*/

 echo '<tr>
    <td bgcolor="#004A4A"><p class="style9"></p>
     </td>
  </tr>
  
  <tr>
    <td bgcolor="#336699" ><span class="style6">';

	



echo '<a href="viewWall.php" target="mainFrame">Profile Home <img src="img/edit.png" width="25" height="25" /></a>
</span></td>
  </tr>
  <tr>
    <td bgcolor="#3E7CBB"><span class="style6">
Edit Personal Profile <img src="img/tick.png"  width="25" height="25"/>	<a href="editprofile.php" target="mainFrame"><img src="img/edit.png" width="25" height="25" /></a> </span></td>
  </tr>
  	
  <tr>
   <td bgcolor="#6699FF"><span class="style6">Upload Profile Photo<img src="img/tick.png" width="25" height="25"/> <a href="album.php" target="mainFrame"><img src="img/edit.png" width="25" height="25" /> </a> </span></td>
  </tr>
  
  <tr>
    <td bgcolor="#663333" align="center"><strong><span class="style6">
	<br><a href="../underconstruc.html" target="mainFrame" > Buzz the Alarm</strong><img src="img/announce.png" width="35" height="35" /></span></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  
  <tr>';



?>


    
  </tr>
</table>
</body>
</html>
