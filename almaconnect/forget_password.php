<html>
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
<title>Forgot password</title>

	
</head>

<body topmargin="20px">
<?php
if(isset($_POST['sub'])){
	extract($_POST);
	include("../conn.php");
	$sql = mysqli_query($connect,"select `otp` from profile_master where alm_uid='$mobNumber' AND answ='$security_answer' ");
if(mysqli_num_rows($sql)){
	$rec=mysqli_fetch_row($sql);
echo "your password is $rec[0]";
}
else echo "wrong security answer";
}
?>
<div class="upper">
<div class="upper-left">
<table width="100%" border="0" cellspacing="0">
  <tr>
    
    <td  width="65%" background="images/BG.PNG" bgcolor="#FFFFFF" ><table width="100%" border="0" cellpadding="5" cellspacing="0">
      <tr>
	  <br><br>
        <td width="46%"><div align="right" class="style1 style2">
          <p class="style3">Enter registered Mobile number or email as Login ID <br>
		    </p>
        </div></td>
        <td width="54%"><form id="form1" name="form1" method="post" action="">
          <input name="mobNumber" type="text" class="style4" maxlength="10" placeholder="Mobile No. or Email "  />
        
        </td>
      </tr>
	  <tr>
	  <br><br>
        <td width="46%"><div align="right" class="style1 style2">
          <p class="style3">Select your security question<br>
          </p>
        </div></td>
                  <td width="54%"><select name="security_question" class="style4" maxlength="10">
                          <option>Who is your best friend?</option>
                          <option>Where were you born?</option>
                          <option>What is your pet name?</option>
                          
                      </select></br></br>
              </td>
            <tr>  
           <td width="46%"><div align="right" class="style1 style2">
          <p class="style3">Enter the security Answer<br>
		    </p></td>
        <td>
                      <input name="security_answer" type="text" class="style4" maxlength="10" placeholder="Your Security Answer"/>
                     <input type='submit'value='continue'name='sub'>
                     </td> </tr>
        
     
      
    </table></td>
  </tr>
</table>

</div>
               </div>
</body>
</html>

