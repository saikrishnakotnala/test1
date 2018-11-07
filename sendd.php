<?php

$str1 = (rand(10,100));
$str2 = 'World!';
$msg = $str1 . ' ' . $str2;
    include('way2sms-api.php');
   
    sendWay2SMS ( '8328051728' , '08feb1996' , '9849461283' , $str1);   
    echo "sent";
     
?>
