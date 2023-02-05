<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
   <style>
        body {
            background-color: red;
        }
    </style>
    <title>Date Transform</title>
</head>



<?php

echo "Hola<br><hr>";

$mysqli = mysqli_connect("sql108.byethost7.com", "b7_24447646", "Palmtree!00", "b7_24447646_statistiki");
$res = mysqli_query($mysqli, "select stamp, UNIX_TIMESTAMP() as ahora from availability_today order by stamp desc limit 10");

$row = $res->fetch_assoc();


$oldstamp = $row["stamp"];
$currstamp = $row["ahora"];
$targetstamp = strtotime('last Friday 9:28:47');
$ddiff = $targetstamp - $oldstamp;

echo $oldstamp;
echo '<br>';
echo date("l M j, Y, H:i:s",$oldstamp);
echo "<hr>";

echo $currstamp;
echo '<br>';
echo date("l M j, Y, H:i:s",$currstamp);
echo "<hr>";

echo $targetstamp;
echo '<br>';
echo date("l M j, Y, H:i:s",$targetstamp);
echo "<hr>";
echo $ddiff;
echo "<hr>";

echo '<br><br><br>';
echo "<hr>";
echo 'close';

?>

<body>
<pre>
run in phpmyadmin
UPDATE `availability_today` SET `stamp`=`stamp`+127133290
$mysqli = mysqli_connect("sql108.byethost7.com", "b7_24447646", "Palmtree!00", "b7_24447646_statistiki");
sort desc stamp in phpmyadmin and adjust for written time

</pre>
</body>

</html>