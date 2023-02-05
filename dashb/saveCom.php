<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php

	if (!isset($_GET["stamp"])) $stamp = 0;
	else $stamp = $_GET["stamp"];
	
	//echo $stamp;
	
	$mysqli = mysqli_connect("localhost", "root", "", "statistiki");

	$res = mysqli_query($mysqli, "delete from comments where stamp=$stamp");

	$query = "insert into comments values(".$stamp.",'".$_GET["big"]."','".$_GET["employees"]."')";
	///echo $query;
	$res = mysqli_query($mysqli, $query);


?>

Data saved
<script>
opener.location.reload();  
window.close();
</script>

</body>

</html>
