<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php

	$ssign = $_POST['shortsign'];
	$query = "select pcs from users where userid='".$ssign."'";
	
	$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
	$res = mysqli_query($mysqli, $query );
	$row = $res->fetch_assoc();
	$pcs = $row['pcs'];
	echo $pcs;
	//echo $query;
	
	$query2 = "UPDATE users SET pcs = $pcs where userid='".$ssign."'";
?>

</body>

</html>
