<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
<style type="text/css">
<!--
.style1 {
	color: #660099;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>

<body>

<div class="col-md-12">
                    <div class="panel panel-danger">
					<div align='right' >
				<?php	
				@session_start();
				//$uid=$_SESSION['uid'];
				 include_once('../conn.php');
				/*mysql_connect("localhost","root","");
	mysql_select_db("nitaa");
   $sql = mysql_query("select *from profile_master where alm_uid='$uid' ");
$rec=mysql_fetch_row($sql);
 
	
	echo <<<ab
 <img src="../almaimage/$rec[17]" height='120'width='100'>
ab;*/
		?>			
                        </div>
                        <div class="panel-heading">
                            Announcements
                        </div>
                        <div class="panel-body">
                            <p>No Announcement .</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
            </div>
			
			
			
			<div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Obituary
                        </div>
                        <div class="panel-body">
                            <p>NA.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
            </div>
<div align="center" class="style1">
  
</body>
</html>
