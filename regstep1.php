<?php

if(isset($_POST["Submit"])){

include_once('conn.php');



$mobNumber = htmlentities($_POST['mobNumber'], ENT_QUOTES, 'UTF-8');
$vfCode=rand(10000, 99999);

$_SESSION['mobno']=$mobNumber;
$_SESSION['vfCode']=$vfCode;

$stat=mysql_query("INSERT INTO mob_verify VALUES('$mobNumber','$vfCode','0');")or die("Data insertion Error.");


$smssent='http://bhashsms.com/api/sendmsg.php?user=9436459622&pass=9485bca&sender=NITAAL&phone='.$mobNumber.'&text=Registration Verification Code: '.$vfCode.' &priority=ndnd&stype=normal';
Header( "HTTP/1.1 301 Moved Permanently" );
Header( 'Location:'. $smssent.'target="_parent' ); 


}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="favicon.ico"> 
    
        
<style type="text/css">
<!--
body {
	background-color: #F0F0F0;
	background-image: url(images/BG.PNG);
}
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {color: #999999}
.style3 {color: #666666}
.style4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0099FF;
	font-size: 24px;
}
-->
</style><noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
</noscript>

		
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

	
</head>

<body topmargin="20px">





<div class="upper">
<div class="upper-left">
<table width="100%" border="0" cellspacing="0">
  <tr>
   
   
    <td  width="65%" background="images/BG.PNG" bgcolor="#FFFFFF" ><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
	  <br><br>
        <td width="46%"><div align="right" class="style1 style2">
          <p class="style3">Enter a working Phone number<br>
		  ** Verification code will be send to this number  </p>
        </div></td>
        <td width="54%"><form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
          <input name="mobNumber" type="text" class="style4" maxlength="10" placeholder="Mobile Number "  />
          <input type="submit" name="Submit" value="Submit" />
        </form>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

<div>
<div></div>


  
</body>
</html>
