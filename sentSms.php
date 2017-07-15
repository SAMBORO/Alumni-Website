<?php

@session_start();
//echo $_SESSION['mobno'];


$argu="http://bhashsms.com/api/sendmsg.php?user=9862922111&pass=84b59ca&sender=060000&phone=" & $_SESSION['mobno'] & "&text=Verification Code: " & $_SESSION['vfCode'] & "&priority=dnd&stype=normal";

header("Location:" & $argu );

echo $argu;


?>