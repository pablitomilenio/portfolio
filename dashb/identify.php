<?php
header('Content-Type: text/html; charset=ISO-8859-1');

if (isset($_COOKIE["derBenutzer"])) {
	$benutzer = $_COOKIE["derBenutzer"];
	$name = $benutzer;
	$nachname = '';
}
else{

	$nber = rand(1, 99999);
	$fname = "thisclient".$nber.".txt";

	system("tracert -h 1 ".$_SERVER['REMOTE_ADDR'].' > '.$fname,$answer);
	
	$myfile = fopen($fname, "r") or die("Unable to open file!");
	$tcont2 = fread($myfile,filesize($fname));
	fclose($myfile);
	
	system("del ".$fname,$answer);
	
	$ststrt = strpos($tcont2,'.')-8;
	
	$computer = substr($tcont2,$ststrt,8);
	//echo $computer.'<br>';
	
	$query = "SELECT name, surname FROM `users` WHERE locate(lower('".$computer."'),pcs) >= 1";
	
	$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
	$res = mysqli_query($mysqli, $query );
	$row = $res->fetch_assoc();
	$name = $row['name'];
	$nachname = $row['surname'];
	
	
} 

if ($name != '') {
	//echo 'You are: '.$name.' '.$nachname;
	setcookie( "derBenutzer", $name.' '.$nachname, strtotime( '+30 days' ));
}
else {
	header('Location: http://sdet2125/getaccess.php');
	/*
	echo "
		<body style='overflow:hidden'><div style='width:100%;height:100%;background-color:black'>ggg</div></body>
	
	";
	*/
}

?>
