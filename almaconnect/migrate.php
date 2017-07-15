

	
											
											
											
											                         <?php
																	  include_once('../conn.php');	
																	
					
					
					$sql1 = mysqli_query($connect,"select * from `table 14`");
$count=0;
$count2=0;
while($row1= mysqli_fetch_assoc($sql1))
{

				
						date_default_timezone_set('Asia/Calcutta'); // CDT
						$uidno=date('ymdhis').rand ( 100, 999 );
						
						
						$name=$row1['COL 3'];
						
						$stst=0;
						$utype="0";	
						$batch="2010";	
						$dept="Chemical Engineering";				
	
		$query="INSERT INTO profile_master (`uniqid_no`, `usertype`, `alm_name`, `alm_admissonY`, `alm_ug_dept`,`verifStatus` ) VALUES ('$uidno','$utype','$name','$batch','$dept','$stst')";
						
 $sql2 = mysqli_query($connect,$query);
 
	echo $name."Success<br>".$count++;


}

					?>
                            
	