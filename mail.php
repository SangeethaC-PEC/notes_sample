<?php
$name=$_GET['name'];
$to=$_GET['email'];
$subject=$name;
$txt=$_GET['message'];
$headers="From:sangeethapandian9@gmail.com"."\r\n".
"CC:sangeethapandian9@gmail.com";

mail($to,$subject,$txt,$headers);
echo "mail sent";
?>
