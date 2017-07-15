<style type="text/css">
<!--
body {
	background-image: url(images/BG.PNG);
}
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style4 {
	font-size: 24px;
	color: #0099FF;
}
-->
</style>

<?php

include_once('conn.php');

@session_start();

$name= htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8');
$contact= htmlentities($_POST['contact'], ENT_QUOTES, 'UTF-8');
$email= htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');
$message= htmlentities($_POST['message'], ENT_QUOTES, 'UTF-8');

date_default_timezone_set('Asia/Calcutta'); // CDT
$subdate = date("d-m-Y");
$subtime = date("h:i:sa");
$status =1;

/*echo $name ;
echo $contact ;
echo $email ;
echo $message . '<br>';
echo $subdate . '<br>';
echo $subtime . '<br>';*/
$ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');



 $sql = "INSERT INTO `quick_view`  (`msgName`, `msgContact`, `msgEmail`, `msgIP`, `msgBody`, `msgRemark`, `msgDt`, `msgTime`, `msgStatus`) VALUES('$name','$contact','$email','$ip','$message','NA','$subdate','$subtime','1');";
try {
    $connectoin = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connectoin->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // use exec() because no results are returned
    $connectoin->exec($sql);
    echo '<p align="center" class="style1">Dear <span class="style4">'.$name.'</span> your message successfully saved</p>
<p align="center" class="style1">Thank you for your valuable views.</p>
<p align="center" class="style1">We will get back to you soon.</p>
<p align="center" class="style1"><a href="mainHome.html">Back to Home page</a> </p>
<p align="center" class="style1">&nbsp;</p>';






    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$connectoin = null;








?>