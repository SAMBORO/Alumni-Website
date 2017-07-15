

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
	padding: 5px;
}
.style2 {color: #999999}
.style3 {color: #666666}
.style4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #0099FF;
	font-size: 24px;
}
-->
</style>
<noscript>
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
    
    <td  width="65%" background="images/BG.PNG" bgcolor="#FFFFFF" ><table width="100%" border="0" cellpadding="5" cellspacing="0">
      <tr>
	  <br><br>
        <td width="46%"><div align="right" class="style1 style2">
          <p class="style3">Your Password is: <br>
		    </p>
        </div></td>
        <td width="54%">
          <?php
          @session_start();
							   
    include_once('../conn.php');
          echo '$_SESSION["pass"]';
          ?>
        
        </td>
      </tr>
	  
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style1 style2">
                <p align="left" class="style3"><a href="login.php"><font color="red"><strong>LogIn Again</strong></font></style></a><br />
          </p>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>

<div>
<div></div>


 
</body>
</html>

