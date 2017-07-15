

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
.style6 {
	font-size: 36px;
	color: #FF0000;
	font-family: Geneva, Arial, Helvetica, sans-serif;
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
  <tr><div  align="center" class="style6 ">
          <p class="style3"> 
    <?php @session_start();
		 if($_SESSION[@'errmsg']=="")
		 {
		 $_SESSION[@'errmsg']=" ";
		 echo $_SESSION[@'errmsg']."I am here";
		 }
		 else
		 {
		   echo $_SESSION[@'errmsg'];
		   unset($_SESSION[@'errmsg']);
		   }
		   ?>
  </p>
        </div>
    <td  width="65%" background="images/BG.PNG" bgcolor="#FFFFFF" ><table width="100%" border="0" cellpadding="5" cellspacing="0">
      <tr>
	  <br><br>
        <td width="46%">
          <div align="right" class="style1 style2">
          <p class="style3">Enter Login IDEnter registered Mobile number or email as Login ID </p>
        </div></td>
        <td width="54%"><form id="form1" name="form1" method="post" action="chklogin.php">
          <input name="mobNumber" type="text" class="style4" maxlength="10" placeholder="User ID "  />
        
        </td>
      </tr>
	  <tr>
	  <br><br>
        <td width="46%"><div align="right" class="style1 style2">
          <p class="style3">Provide Passcode  <br>
          </p>
        </div></td>
        <td width="54%">
          <input name="passcode" type="password" class="style4" maxlength="10" placeholder="Passcode "  />
          <input name="Submit" type="submit" id="Submit" value="Continue" />
        </form>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="right" class="style1 style2">
          <p align="left" class="style3">Click here if you can not remeber passcode. <br />
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
