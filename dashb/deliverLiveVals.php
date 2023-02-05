<?php

if ($_GET['stamp'] == "") $stamp = strtotime("00:00:01");
else $stamp = $_GET['stamp'];
$stamp2 = $stamp + 86397;

$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
$query = "select * from availability_today where stamp > ".$stamp." AND stamp <= ".$stamp2;
$res = mysqli_query($mysqli,$query);

$stack = "";
$dbTimes = "";

while ($row = $res->fetch_assoc()) {
    $stack .= $row['Festo'].";";
    $dbTimes .= date("H:i:s",$row['stamp']).";";
}

echo $stack."/".$dbTimes;

//echo $query;

?>
