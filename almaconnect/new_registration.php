<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Suman Deb , NIT Agartala" />
	<meta name="keywords" content="suman deb,suman, sumandeb, agartala,tripura " />
	<meta name="author" content="Suman Deb" />
	
	<title>MBA Application Portal</title>
	
	<script type="text/javascript">
function validate_name(event)
{
	var chCode = ('charCode' in event) ? event.charCode : event.keyCode;
                // returns false if a numeric character has been entered
				var span = document.getElementById("name_rs");
				if(!(chCode < 48 /* '0' */ || chCode > 57) )
				{
				//alert("Numbers not allowed");
				span.innerHTML = "Numbers not allowed";
				}
				else
				{
				span.innerHTML = '';
				}
    return ((chCode < 48 /* '0' */ || chCode > 57) /* '9' */);
}

function validateForm(form)
	{
		var span_name = document.getElementById("name_rs");
		var span_email = document.getElementById("mail_rs");
		var span_pass = document.getElementById("pass_rs");
		var span_secans = document.getElementById("secans_rs");
		
		
			if(form.name.value == '')
			{
				
				span_name.innerHTML = "Name cannot be empty.";
				return false;
			}	
			else if (form.email.value == '')
				{
					
					span_email.innerHTML = "E-mail as user name <br>cannot be empty.";
					return false;
				}
					
			else if(form.pass.value == '')
			{
				span_pass.innerHTML = "Password cannot be empty.";
				return false;
			}
			else if(form.pass.value != form.confpass.value)
			{
				span_pass.innerHTML = "Password and confirm password is not matching.";
				return false;
			}
			else if( form.secans.value == '')
			{
				span_secans.innerHTML = "Enter security answer.";
				return false;
			}
			else
			{return true;
		}		
	
	}
	
	function validate_field(event)
{
		//var span_name = document.getElementById("name_rs");
		var span_email = document.getElementById("mail_rs");
		var span_pass = document.getElementById("pass_rs");
		var span_secans = document.getElementById("secans_rs");
		    
				
				span_email.innerHTML = '';
				span_pass.innerHTML = '';
				span_secans.innerHTML = '';
				
    return (true);
}


</script>


    <style type="text/css">
<!--
/*
Original design: andreas04 (v2.0 - June 01, 2010) - A free xhtml/css website template by Andreas Viklund.
For more information, see http://andreasviklund.com/templates/andreas04/
*/

/* General layouts */
body {
	margin:0;
	padding:0;
	text-align:right;
	background-color: #FFFFFF;
	background-image: url(url());
	font-family: tahoma, verdana, sans-serif;
	font-size: 12pt;
	width: 100%;
	vertical-align: middle;
	background-repeat: repeat;
	background-position: right center;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
}
#container {
	width:100%;
	min-width:700px;
	text-align:left;
	border-left:1px solid #eef;
	border-right:1px solid #eef;
	background-color: #f0f0f0;
	background-image: url(images/bodybg1.png);
	background-repeat: repeat-x;
	height: 30px;
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
	padding-top: 0;
	padding-right: 0px;
	padding-bottom: 0;
	padding-left: 0px;
}
#container800 {width:700px; padding:0 20px; margin:0 auto; background:#f0f0f0 url(images/contentbg.png) repeat-x; text-align:left; border-left:1px solid #eef; border-right:1px solid #eef;}
#container1024 {width:920px; padding:0 20px; margin:0 auto; background:#f0f0f0 url(images/contentbg.png) repeat-x; text-align:left; border-left:1px solid #eef; border-right:1px solid #eef;}

/* Tags */
a {text-decoration:none; color:#269; font-weight:bold;}
a:hover {
	text-decoration:none;
	color: #006666;
}
p {margin:0 0 15px 0;}
h1,h2,h3,h4 {margin:0; padding:0; font-weight:normal; line-height:1.2em;}
h1 {font-size:3em; letter-spacing:-2px; color:#567; margin:15px 0 5px 20px;}
h1 a:hover {text-decoration:none;}
h2 {font-size:1.6em; letter-spacing:-1px; margin:-10px 0 0 30px; color:#888;}
h3 {color: #555; font-size:1.4em; margin:1em 0 0.5em 0.5em;}
h4 {font-size:1.2em; font-weight:bold;}

/* Header */
#sitetitle {
	float:left;
	height:50px;
	width: 30%;
	color: #333;
	background-repeat: no-repeat;
}
#sitetitle a {color:#567; font-weight:normal;}
#sitetitle a:hover {color:#269;}
#menu {height:40px; padding-top:35px; text-align: right;}
#menu a {margin:0; height:100px; padding:35px 6px 41px 6px; font-size:1.6em; font-weight:normal; letter-spacing:-1px; color:#888;}
#menu a:hover{color:#269; text-decoration:none; background: #fff url(images/menuhover.png) repeat-x; padding:35px 5px 41px 5px; border-left: 1px solid #eee; border-right: 1px solid #eee;}
#menu a.current{color:#269;}
#menu a.current:hover{color:#888; padding:35px 6px 41px 6px;  text-decoration:none; background: none; border:0;}

/* Main content and sidebar layout */
#content {margin-top:30px; width:100%; clear:both; background:url(images/globebottom.gif) bottom left no-repeat;}
#content h2 {margin:0 0 10px 0; color:#555; border-bottom:2px solid #abb;}
#content h2 a {color:#555; font-weight:normal;}
#content h2 a:hover {color:#269; text-decoration:none; background:none;}
#content p {margin:0 0.5em 1.2em 0.5em;}
#left {width:100%; float:left; line-height:1.4em;}
#right {margin-left:70%; margin-top:-15px; line-height:1.4em;}
#right h2 {margin:0 0 8px 0; padding:0; font-size:1.6em;}

/* Footer */
#footer {clear:both; padding:10px 0 12px 24px; text-align:left; color:#777;}
#footer a {color:#777; font-weight:normal;}
#footer h2 {color:#aaa; font-size:2em; letter-spacing:-1px; margin:0; padding:0; border:0;}
#footer h2 a {color:#aaa;}
#footer p {margin:0; padding:0;}


/* Additional classes */
.entry {
	border:2px solid #fff;
	
	color:#339966;
	width: 98%;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 20px;
	margin-left: 0;
	padding-top: 10px;
	padding-right: 10px;
	padding-bottom: 0;
	padding-left: 10px;
}
.entry a:hover, .intro a:hover {text-decoration:none; padding-bottom:2px; background:url(images/flash2.gif) bottom left repeat-x;}
.link {color:#269; background:url(images/linkarrow.gif) left no-repeat; display:block; margin:4px 0 0 0; padding:2px 1em;}
.link:hover {color:#48b; background:url(images/blinkarrow.gif) left no-repeat;
text-decoration:none;}
.thumbs img {padding:3px; margin:0 2px 2px 0; border:1px solid #fff; background-color:#ddd; color: #555;}
.thumbs img:hover {background: url(images/flash.gif);}
.entryphoto {margin:5px; float:left; padding:3px; border:1px solid #fff; background-color:#ddd; color:#333;}
.meta {clear:both; border-top: 2px solid #ccc; padding: 5px 1px 0 0; margin:10px 0 0 0; text-align:right; font-size:1em; color: #567;}
.pagenav {color: #777; text-align:center;}
.subcontainer {display:block; width:98%;}
.rightsub {float:left; width:45%; padding:0;}
.rightsub2 {margin-left:50%; padding:0;}
.right {text-align:right;}
.center {text-align:center;}
.clear {clear:both;}
.hide {display:none;} 
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	width:280px;
	height:46px;
	z-index:1;
	left: 0px;
	top: 44px;
}
a:link {
	color: #FF6600;
	text-decoration: none;
}
a:visited {
	color: #006699;
	text-decoration: none;
}
a:active {
	color: #663300;
	text-decoration: none;
}
a:over {
	color: #FF6600;
}
#singleLIne table {
	margin-bottom: 0px;
	border-bottom-width: 50px;
	border-bottom-style: solid;
	border-bottom-color: #015C70;
}
.style54 {color: #FFFFFF}
#Layer3 {
	position:absolute;
	width:471px;
	height:155px;
	z-index:1;
	left: 179px;
	top: 58px;
}
.formbody {
border-radius: 20px ;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #009999;
	border: thin solid #003333;
	visibility: visible;
	z-index: auto;
	vertical-align: middle;
	-webkit-border-radius: 0px 99px 0px 0px;
	-moz-border-radius: 0px 99px 0px 0px;
	border-radius: 0px 99px 0px 0px;background:rgba(255,255,18,0.5)
	;-webkit-box-shadow: #B3B3B3 19px 19px 19px;
	-moz-box-shadow: #B3B3B3 19px 19px 19px;
	 box-shadow: #B3B3B3 19px 19px 19px;"
}
.formbody1 {border-radius: 20px ;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #009999;
	border: thin solid #003333;
	visibility: visible;
	z-index: auto;
	vertical-align: middle;
	-webkit-border-radius: 0px 50px 0px 0px;
	-moz-border-radius: 0px 50px 0px 0px;
	border-radius: 0px 50px 0px 0px;background:rgba(255,250,200,0.5)
	;-webkit-box-shadow: #B3B3B3 19px 19px 19px;
	-moz-box-shadow: #B3B3B3 19px 19px 19px;
	 box-shadow: #B3B3B3 19px 19px 19px;"
}
.style55 {
	color: #003333;
	font-size: 14px;
}
.style56 {
	color: #000000;
	font-size: 14;
	font-weight: bold;
}
.style57 {color: #663366}
.style61 {font-size: 10px}
.style62 {color: #FF6600}
.style63 {color: #003333}
.style64 {color: #330000}
-->
    </style>
</head>

<body>
<div align="center" class="style54"></div>

<br>
<br>
<div class="formbody1">
  <div align="center">
    <label></label><p>&nbsp;</p>
    <div class="regbox style56"><span class="style57">Fill up the following </span><br>
	<form id="form1"  method="post" name="register" action="writeRegister.php" onSubmit="return validateForm(this)" enctype="multipart/form-data">
      <table border="0">
        
		<tr>
          <td width="254"><label>
            <div align="right">Name
              </label>            
            </div></td>
          <td width="240">
            <div align="left">
              <input name="name" type="text" id="name"   onKeyPress="return validate_name(event)"  size="40"  />
            </div></td>
          <td width="195"><div align="left" class="style62" ><span class="style1" id="name_rs">&nbsp;</span><span class="style63"></span></td>
		</tr>
        <tr>
          <td><div align="right">Email<span class="style61"></span> </div></td>
          <td>
            <div align="left">
              <input name="email" type="email" id="email" size="40" maxlength="40"  placeholder="This will be used as user ID"  />
              </div> </td>
          <td><div align="left" class="style62" ><span class="style1" id="mail_rs">&nbsp;</span><span class="style63"></span> <span id="status"></span></div></td>
        </tr>
		
		<tr>
          <td><div align="right">Password</div></td>
          <td>
            <div align="left">
              <input name="pass" type="password" id="pass" onKeyPress="return validate_field(event)" />
              </div></td>
          <td><div align="left" class="style62" ><span class="style1" id="pass_rs">&nbsp;</span><span class="style63"></span></div></td>
		</tr>
		<tr>
          <td><div align="right">Confirm Password </div></td>
          <td>
            <div align="left">
              <input name="confpass" type="password" id="confpass" onKeyPress="return validate_field(event)"/>
              </div></td>
          <td>&nbsp;</td>
		</tr>
		<tr>
          <td><div align="right">Security Question  </div></td>
          <td>
            <div align="left">
              <select name="secq" id="secq" >
                <option>What is your first school name?</option>
                <option>Which place were you born?</option>
                <option>What is your first mobile number?</option>
              </select>
              </div></td>
          <td>&nbsp;</td>
		</tr>
		<tr>
          <td><div align="right">Your Answer  </div></td>
          <td>
            <div align="left">
              <input name="secans" type="text" id="secans" size="40" onKeyPress="return validate_field(event)"  />
              </div></td>
          <td><div align="left" class="style62" ><span class="style1" id="secans_rs">&nbsp;</span><span class="style63"></span></div></td>
		</tr>
         <tr>
          <td><div align="right"></div></td>
          <td>
            <p align="right">
              <input name="Register" type="submit" id="Register" value="Register" />
            </p>
          <td>          
                 </td>
         </tr>
      </table> </form>
    </div>
    <p>&nbsp;</p>
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>