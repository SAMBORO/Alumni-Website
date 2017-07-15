<body> <table width='100%' style='position:absolute;top:0;left:0;'><tr><td>
<?php 
@session_start();
if($_SESSION['uid'])//change
$uid=$_SESSION['uid'];
else echo"<font color='red'><strong>your session expires Please Login Again</strong></font>";	
include_once('../conn.php');

$sql = mysqli_query($connect,"select *from profile_master where alm_uid='$uid'");
$rec=mysqli_fetch_row($sql);



?></td></tr></table>
<?php
if(isset($_POST['sub'])){
	extract($_POST);
include_once('../conn.php');

mysqli_query($connect,"UPDATE `profile_master` SET 

`alm_name`='$nam',
`alm_passcode`='$npaswd',`alm_fname`='$fna',
`alm_admissonY`='$ayear',`alm_ug_dept`='$udept',
`alm_ug_curriculam`='$uculam',`alm_ug_passed`='$upyear',
`alm_pg_dept`='$pgdept',`alm_pg_spcz`='$pgspeti',
`alm_pg_passed`='$pgpyear',
`alm_phd_dept`='$phdept',`alm_phd_passed`='$phpyear',
`alm_mobile`='$mno',
`alm_email`='$eid',`alm_bloodg`='$bgroup',
`alm_origin_city`='$ocity',`alm_present_city`='$ccity',`dob`='$dob',`answ`='$answ',`ques`='$ques' WHERE `alm_uid`='$use'	");	


}
?>
<!-- change -->
<table width='100%'height='100%' style='position:absolute;top:0;left:0;'>
  <tr><td bgcolor='lightblue'width='100%'height='100%'>
      <form method='post'action='' enctype='multipart/form-data'>
      <table width='100%'cellspacing='10px'>
        <tr><td>
                <fieldset><legend align='center'>pesonnal details</legend>
           <table width='100%'>
           <tr><td>
		   <table width='100%' cellspacing='20'><tr>
             <td>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="nam"value='<?php echo $rec[3]; ?>' placeholder='  Name' ></td>
             <td>Father name:&nbsp;<input name="fna" placeholder='  Father Name'value='<?php echo $rec[6]; ?>' ></td>
             <td>D.O.B:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="dob" type='date'class='date'placeholder='Enter Your Date of Birth' value='<?php echo "$rec[30]"; ?>'></td>

</tr>
<tr>
<td>Origin City:&nbsp;<input name="ocity" placeholder=' original city' value='<?php echo $rec[22]; ?>'></td>

<td>Current City:&nbsp;<input name="ccity" placeholder='Current City' value='<?php echo $rec[23]; ?>'></td>

<td>
Blood Group:&nbsp;<input name="bgroup" placeholder='Blood Group' value='<?php echo $rec[21]; ?>'></td>
</tr>
<tr>
<td>Mobile No:&nbsp;&nbsp;<input name="mno" placeholder=' Mobile No' value='<?php echo $rec[18]; ?>'></td>

<td>Email ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="eid" placeholder='Email ID' value='<?php echo $rec[20]; ?>'></td>

<td>
</td>
</tr>

</table></td>
<td><table>
<tr><td>
<?php 

if(isset($_POST['change']) ){
	$finame=$_FILES['f1']['name'];
	$fitype=$_FILES['f1']['type'];
	$fitname=$_FILES['f1']['tmp_name'];
	if(move_uploaded_file($fitname,"../almaimage/".$finame))
	{
		

//changing
mysqli_query($connect,"UPDATE `profile_master` SET 
`alm_prim_photo` = '$finame' WHERE `profile_master`.`alm_uid`='$uid'");
   echo <<<ab
 <img src="../almaimage/$finame" height='120'width='100'>
ab;
	}	
    
    else echo "<b>Choose a Photo</b>";
	
	}
else	{
	
	$sql = mysqli_query($connect,"select *from profile_master where alm_uid='$uid'");
$rec=mysqli_fetch_row($sql);
  
 
	if($rec[17]!=''){
	echo <<<ab
 <img src="../almaimage/$rec[17]" height='120'width='100' alt='sorry'>
ab;
	}
	else echo "you have no Photo";
   }
?></td></tr>
<form action=''method='post'enctype='multipart/form-data'>
<tr><td><input type='file'name='f1'>

<input type='submit'name='change'value='change'> 
</td></tr>
</form>
</table>
</td>
</tr>
</table>
</fieldset>
</td></tr>
<tr><td>
<fieldset><legend align='center'>Academic details</legend>
<table width='100%' cellspacing='20'><tr>
<td>Admissin Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="ayear" placeholder='Admission Year'value='<?php echo $rec[7]; ?>'></td>
<td>UG Department:&nbsp;&nbsp;&nbsp;
<select name="udept"> 
<?php 
echo "<option selcted>$rec[8]</option>";
$datad=mysqli_query($connect,"select * from deptmaster");
while($recd=mysqli_fetch_row($datad))
	echo "<option>$recd[0]</option>";
?>
</select></td>
<td>UG Curriculam:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="uculam" placeholder='UG Curriculam'value='<?php echo $rec[9]; ?>'></td>

</tr>

<tr>
<td>UG Passout Year:&nbsp;&nbsp;<input name="upyear" placeholder='UG Passout Year'value='<?php echo $rec[10]; ?>'></td>
<td>PG Department:&nbsp;&nbsp;&nbsp;&nbsp;
<select name="pgdept"> 
<?php 
echo "<option selcted>$rec[11]</option>";
$datad=mysqli_query($connect,"select * from deptmaster");
while($recd=mysqli_fetch_row($datad))
	echo "<option>$recd[0]</option>";
?>
</select>
</td>
<td>PG Specialization:&nbsp;&nbsp;<input name="pgspeti" placeholder='PG Specialization'value='<?php echo $rec[12]; ?>'></td>

</tr>
<tr>
<td>PG Passout Year:&nbsp;&nbsp;<input name="pgpyear" placeholder='PG Passout Year'value='<?php echo $rec[14]; ?>'></td>
<td>Phd Department:&nbsp;&nbsp;&nbsp;
<select name="phdept"> 
<?php 
echo "<option selcted>$rec[15]</option>";
$datad=mysqli_query($connect,"select * from deptmaster");
while($recd=mysqli_fetch_row($datad))
	echo "<option>$recd[0]</option>";
?>
</select>
</td>
<td>Phd Passout Year:&nbsp;&nbsp;&nbsp;<input name="phpyear" placeholder='Phd Passout Year'value='<?php echo $rec[16]; ?>'></td>

</tr>

</table>
</fieldset>
</td></tr>

<tr><td><fieldset><legend align='center'>Account Details</legend>
<table width='100%'>
<tr><td>Security Question:
<select name='ques'>
<option>Select any one</option>
<option>Who is your best friend?</option>
<option>Where were you born?</option>
<option>What is your pet name?</option>

</select>

</td>

<td>Security Answer:
<input  name='answ' placeholder='Your Answer' value='<?php echo $rec[32]; ?>'></td>

<td style="display:none;">UniqueId:<input name="use" readonly='true'value='<?php echo $uid; ?>' placeholder='Enter Your UserID' class='required'></td>
<td>New Password:<input name="npaswd" placeholder='New Password' ></td>
</tr>
</table></fieldset>
</td></tr>




</table><br><br><?php for($i=0;$i<120;$i++)
	echo "&nbsp";?>
<input type='reset'value="Reset">&nbsp;&nbsp;
<input type='submit'name='sub'value='Submit'>
</form>
</td></tr>
</table>



