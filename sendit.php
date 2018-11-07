<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
date_default_timezone_set('Asia/Kolkata');




$str1 = (rand(10,100));
$str2 = 'World!';
$msg = $str1 . ' ' . $str2;


    include('way2sms-api.php');
   
    sendWay2SMS ( '8328051728' , '08feb1996' , '9030051070' , 'hellsao');   
    echo "hmm1as";
     
?>
</body>
</html>