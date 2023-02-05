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

$mysqli = mysqli_connect("localhost", "pablo", "portaf", "statistiki");


/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* check if server is alive */
if ($mysqli->ping()) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}


$res = mysqli_query($mysqli, "select stamp, UNIX_TIMESTAMP() as ahora from availability_today order by stamp desc limit 10");

$row = $res->fetch_assoc();


$oldstamp = $row["stamp"];
$currstamp = $row["ahora"];
$targetstamp = strtotime('last Friday 9:28:47');
$ddiff = $targetstamp - $oldstamp;

echo "<hr>oldstamp:";
echo $oldstamp;
echo '<br>';
echo date("l M j, Y, H:i:s",$oldstamp);
echo "<hr>";

echo "<hr>currstamp:";
echo $currstamp;
echo '<br>';
echo date("l M j, Y, H:i:s",$currstamp);
echo "<hr>";

echo "<hr>targetstamp:";
echo $targetstamp;
echo '<br>';
echo date("l M j, Y, H:i:s",$targetstamp);
echo "<hr>";
echo "<hr>diff:";
echo $ddiff;
echo "<hr>";

echo '<br><br><br>';
echo "<hr>";
echo 'close';

?>

<body>
<pre>
run in phpmyadmin

use statistiki
UPDATE `availability_today` SET `stamp`=`stamp`+<?php echo $ddiff; ?>;

$mysqli = mysqli_connect("sql108.byethost7.com", "b7_24447646", "Palmtree!00", "b7_24447646_statistiki");
sort desc stamp in phpmyadmin and adjust for written time

</pre>
</body>

</html>