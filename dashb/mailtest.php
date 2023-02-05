<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>


<?php
    ini_set("SMTP", "adesmtp3.de.festo.net");
    ini_set("sendmail_from", "pablo.navarro@festo.com");

    $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";

    $headers = "From: pablo.navarro@festo.com";


    mail("pablo.navarro@festo.com", "Testing", $message, $headers);
    echo "Check your email now....<BR/>";
?>

</body>

</html>
