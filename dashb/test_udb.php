<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://www.zamza.cl/contabilidad/Leistungsindex/ -->
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

<script src="jquery-2.1.1.js"></script>
<title>udb</title>
</head>


<?php
include '/htmldom/simple_html_dom.php';

$minPossible = strtotime("00:00:01");


$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
$res = mysqli_query($mysqli, "select max(stamp) as themax from availability_today");
$maxStamp = mysqli_fetch_assoc($res);
//echo "TheMAX: ".$maxStamp["themax"];
$maxStamp = $maxStamp["themax"];

$html = file_get_html('data.html');

$stamp = $html->find('td', 0)->innertext;
//$stamp = $stamp->find("span",1);
$stamp = substr($stamp, -8, 8);
$time = $stamp;
$stamp = strtotime($stamp);





$row1 = $html->find('tr', 2);
echo $html;
echo "<hr><pre>";

$avFesto = floatval(str_replace(",", ".", $row1->find("td",1)->innertext));
$avTTS   = floatval(str_replace(",", ".", $row1->find("td",2)->innertext));
$avDid   = floatval(str_replace(",", ".", $row1->find("td",3)->innertext));
$avProd  = floatval(str_replace(",", ".", $row1->find("td",4)->innertext));

$avFestoC = floatval(str_replace(",", ".", $row1->find("td",6)->innertext));
$avTTSC   = floatval(str_replace(",", ".", $row1->find("td",7)->innertext));
$avDidC   = floatval(str_replace(",", ".", $row1->find("td",8)->innertext));


$rowX = $html->find('tr', 8);
$callsFesto   = intval($rowX->find("td",1)->innertext);
$callsTTS  = intval($rowX->find("td",2)->innertext);
$callsDid   = intval($rowX->find("td",3)->innertext);

$rowX2 = $html->find('tr', 9);
$callsFestoW   = intval($rowX2->find("td",1)->innertext);
$callsTTSW  = intval($rowX2->find("td",2)->innertext);
$callsDidW   = intval($rowX2->find("td",3)->innertext);

$rowX3 = $html->find('tr', 10);
$callsFestoM   = intval($rowX3->find("td",1)->innertext);
$callsTTSM  = intval($rowX3->find("td",2)->innertext);
$callsDidM   = intval($rowX3->find("td",3)->innertext);


/*
echo $avFesto."<br>";
echo $avTTS."<br>";
echo $avDid."<br>";
echo $avProd."<br>";

echo $avFestoC."<br>";
echo $avTTSC."<br>";
echo $avDidC."<br>";
*/

echo $callsFesto."<br>";
echo $callsTTS."<br>";
echo $callsDid."<br>";

echo $callsFestoW."<br>";
echo $callsTTSW."<br>";
echo $callsDidW."<br>";

echo $callsFestoM."<br>";
echo $callsTTSM."<br>";
echo $callsDidM."<br>";

/*

echo strtotime("19:27:54");
echo "\n";
echo $stamp;
*/


?>