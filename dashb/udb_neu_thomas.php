<?php
include '/htmldom/simple_html_dom.php';

$minPossible = strtotime("00:00:01");


$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
$res = mysqli_query($mysqli, "select max(stamp) as themax from availability_today");
$maxStamp = mysqli_fetch_assoc($res);
//echo "TheMAX: ".$maxStamp["themax"];
$maxStamp = $maxStamp["themax"];

//system('cmd /c cp.bat');


//REACTIVATE THE BELOW LINE
//system('cp.bat');

//exec('cp.bat');

//$last_line = system('cp.bat', $retval);
$last_line = system('cp.bat 2>&1', $retval);
echo "<br>";
echo $last_line;
echo "<br>";
echo $retval;


echo "<br><br><hr><br>";


$myfile = fopen("data.csv", "r") or die("Unable to open file!");
$tcont2 = fread($myfile,filesize("data.csv"));
fclose($myfile);
$tc2arr = explode(";",$tcont2);


$myfileN = fopen("data_new.csv", "r") or die("Unable to open file!");
$tcontN = fread($myfileN,filesize("data_new.csv"));
fclose($myfileN);
$tcNarr = explode(";",$tcontN);



print_r($tc2arr);
echo "<hr>";
print_r($tcNarr);

$stamp2 = filemtime("data.csv");
$stamp = $stamp2;
$time = date('H:i',$stamp);

$html = file_get_html('data.html');

$size = filesize('data.csv');

if (($maxStamp > ($stamp + 25*60) ) && ($maxStamp > strtotime("06:30:00"))) mysqli_query($mysqli, "DELETE FROM availability_today ORDER BY stamp DESC LIMIT 1"); // Ausreisser loeschen




$row1 = $html->find('tr', 2);
//echo $html;
//echo "<hr><pre>";

//$avFesto = round(floatval(str_replace(",", ".", $tc2arr[30]))*100,1);
$avFesto = round(floatval(str_replace(",", ".", $tcNarr[192]))*100,1);  ///////NEW
$avTTS   = round(floatval(str_replace(",", ".", $tc2arr[84]))*100,1); //Feld 84 oder 77?
$avDid   = round(floatval(str_replace(",", ".", $tcNarr[113]))*100,1);
$avProd  = round(floatval(str_replace(",", ".", $tc2arr[41]))*100,1);

/*
echo $avFesto."<br>";
echo $avTTS   ."<br>";
echo $avDid   ."<br>";
echo $avProd  ."<br>";
*/

$avFestoC = -1;
$avTTSC   = -1;
$avDidC   = -1;


$row8 = $html->find('tr', 8);



//$festo_today 		= intval(str_replace(",", ".", $tc2arr[20]));
$festo_today 		= intval(str_replace(",", ".", $tcNarr[20]));///////NEW
$festo_today2 		= intval(str_replace(",", ".", $tcNarr[182]));///////NEW
$fLost_today 		= intval(str_replace(",", ".", $tc2arr[22]));
//$fLT_today  		= intval(str_replace(",", ".", $tc2arr[29]));
$fLT_today  		= intval(str_replace(",", ".", $tcNarr[191]));///////NEW
$tts_today   		= intval(str_replace(",", ".", $tcNarr[74]));
$didactic_today   	= intval(str_replace(",", ".", $tc2arr[56]));
$vip_today   		= intval(str_replace(",", ".", $tcNarr[110]));
$produktion_today  	= intval(str_replace(",", ".", $tcNarr[38]));


$row9 = $html->find('tr', 9);

$festo_week 		= intval(str_replace(",", ".", $tc2arr[110]));
$tts_week   		= intval(str_replace(",", ".", $tcNarr[272]));
$didactic_week   	= intval(str_replace(",", ".", $tc2arr[146]));
$vip_week   		= intval(str_replace(",", ".", $tcNarr[308]));
$produktion_week  	= intval(str_replace(",", ".", $tcNarr[236]));

$row10 = $html->find('tr', 10);

$festo_month 		= intval(str_replace(",", ".", $tc2arr[200]));
$tts_month   		= intval(str_replace(",", ".", $tcNarr[73]));
$didactic_month   	= intval(str_replace(",", ".", $tc2arr[236]));
$vip_month   		= intval(str_replace(",", ".", $tcNarr[506]));
$produktion_month  	= intval(str_replace(",", ".", $tcNarr[434]));
$av_fto_month 	 	= round(floatval(str_replace(",", ".", $tcNarr[192]))*100,1);
//$festo_exakt 	 	= $tc2arr[210];
$festo_exakt 	 	= $tcNarr[192];

$lt_month	 	 	= $tc2arr[199];
$month		 	 	= $tc2arr[209];
$lt_year	 	 	= $tc2arr[210]; //wert muss noch angepasst werden
$year		 	 	= $tc2arr[210];


$festo_today3   	= round(floatval(str_replace(",", ".", $tcNarr[23]))*100,1);

//echo $didactic_month;

//echo $stamp."<br>";

/*
echo $avFesto."<br>";
echo $avTTS."<br>";
echo $avDid."<br>";
echo $avProd."<br>";

echo $avFestoC."<br>";
echo $avTTSC."<br>";
echo $avDidC."<br>";
*/

/*

echo strtotime("19:27:54");
echo "\n";
echo $stamp;
*/

if(($stamp >= strtotime("05:50:00")) && ($stamp <= strtotime("19:30:00"))) {
	if ( true ) { //if the maximum stamp is from yesterday then insert something from today. The stamp cannot be 25 minutes bigger //($maxStamp <= $minPossible) || ($stamp <= ($maxStamp + (6*60*60)))
		$query = "insert into availability_today values(".$stamp.",'".$time."',".$avFesto.",".$avTTS.",".$avDid.",".$avProd.",'".$festo_exakt."',".$fLT_today.",".$festo_today2.")";
		$query2a = "truncate bogendiagramm";
		$query2b = "insert into bogendiagramm values(".$stamp.",'".$time."','".$festo_today."','".$tts_today."','".$vip_today."','".$produktion_today."','".$festo_week."','".$tts_week."','".$vip_week."','".$produktion_week."','".$festo_month."','".$tts_month."','".$vip_month."','".$produktion_month."','".$av_fto_month."')";
		$query3a = "truncate percfestobogen";
		$query3 = "insert into percfestobogen values(".$festo_today3.")";
		$qError   = "UPDATE status SET no_data=1";
		$qCorrect = "UPDATE status SET no_data=0";
		
		$progQuer = "insert into prognose values(".$lt_month.",".$month.",".$lt_year.",".$year.")";		

		//echo $query2;
		if ($size > 900 && (($avFesto  + $avTTS + $avDid + $avProd) > 5)) {
			$res = mysqli_query($mysqli,$query );
			$res = mysqli_query($mysqli,$query2a );
			$res = mysqli_query($mysqli,$query2b );
			$res = mysqli_query($mysqli,$query3a );
			$res = mysqli_query($mysqli,$query3 );
			$res = mysqli_query($mysqli,$qCorrect );
			$res = mysqli_query($mysqli,$progQuer );
			echo "<br><br>Daten vorhanden";
		}
		else {
			echo "<br><br>Keine Daten. Markiere Fehler filesize:".$size;;
			$res = mysqli_query($mysqli,$qError );
		}

	}
}

?>