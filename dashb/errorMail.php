<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Sending error mail...</title>
</head>

<body>
<?php

$to      = 'jose-pablo.escaidanavarro@lt.festo.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: jose-pablo.escaidanavarro@lt.festo.com';
if (mail($to, $subject, $message, $headers)) {
echo("Message successfully sent!");
} else {
echo("Message delivery failed...");
}



$to = "lt0jpsn@festo.com";
$subject = "Hi!";
$body="test".PHP_EOL;
$body.="Hello World. If all went well then you can see this mail in your Inbox".PHP_EOL;
$body.="Regards".PHP_EOL;
$body.="Idrish Laxmidhar".PHP_EOL;
$body.="http://i-tech-life.blogspot.com".PHP_EOL;

$headers = "From: root@localhost.com";

if (mail($to, $subject, $body, $headers)) {
echo("Message successfully sent!");
} else {
echo("Message delivery failed...");
}

?>

</body>

</html>
