<?php 
@session_start();
session_destroy();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NITA Online Portal</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #663366;
	font-weight: bold;
	font-size: 12px;
}
-->
</style>
</head>

<body><table height='100%'><tr><td>
<div align="center" class="style1">
<?php

echo "<h2><strong>Happy To See You Again.....</strong>";
for($i=0;$i<3000000;$i++)
{
	echo " ";
}
echo "<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>";
echo "<script>location='login.php'</script>";
?>
</div>
</body>
</html>
