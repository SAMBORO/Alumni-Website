<?php

mysql_connect("localhost","root","");
mysql_select_db("nitaa");

@session_start();
$id=$_SESSION['uid'];
$sql = mysql_query("select *from profile_master where alm_uid='$id' ");
$rec=mysql_fetch_row($sql);
 header("content-type:'$rec[28]'");
 echo "$rec[17]";

?>