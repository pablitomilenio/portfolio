<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://www.zamza.cl/contabilidad/Leistungsindex/ -->
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="shortcut icon" href="../favicon.ico?new" type="image/x-icon">
<link rel="icon" href="../Final.ico" type="image/x-icon">

<script src="jquery-2.1.1.js"></script>

<title>Current Availability</title>
<style type="text/css">
<!--
body {
	background-color: #4a4d4d;
	margin: 0;
	overflow: hidden;
	font-family:MetaPlusLF;
	color:white;
}
#theD{
 float:right;
 top:5%;
 left:1%;
 position:absolute;
 width:98%;
 height:95%;
}

#links{
 float:left;
 top:50%;
 left:-80px;
 position:absolute;
 -ms-transform: rotate(-90deg);  
 -webkit-transform: rotate(-90deg);
 font-size: 40pt;
 color: #C0C0C0;
 
}
#untenMittig{
color: #C0C0C0;
 float:right;
 bottom:25px;
 left:50%;
 position:absolute;
 font-size: 40pt;
}

#monatsZahl{
 color: #C0C0C0;
 float:right;
 bottom:25px;
 right:9%;
 position:absolute;
 font-size: 40pt;
}

#callsL{
 color: #C0C0C0;
 float:right;
 bottom:25px;
 left:11%;
 position:absolute;
 font-size: 40pt;
}


.auto-style1 {
	text-align: center;
	font-family: MetaPlusLF;
	color: #C0C0C0;
	top:0px;
	margin:0px;
	margin-top:30px;
	padding:0;
	text-decoration: blink;
	font-size: 70pt;
}

.auto-style2 {
	font-size: 38pt;
}

-->
</style>


</head>

<?php

$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
$query = "select * from bogendiagramm";
$res = mysqli_query($mysqli,$query);

$row = $res->fetch_assoc();

$av_fto_month = $row['av_fto_month'];

if (strlen($av_fto_month) == 2) $av_fto_month .= '.0';




	//Erg.
	$res = mysqli_query($mysqli, "select REPLACE(ThisMonth, ',', '.')*100 as thismonth from availability_today order by stamp desc limit 1 " );
	$row = $res->fetch_assoc();
	
	$av = $row['thismonth'];
	//AvToday End of Day
	
	$res2 = mysqli_query($mysqli, "select festo_month from bogendiagramm" );
	$row2 = $res2->fetch_assoc();
	
	$callsTotal = $row2['festo_month'];

	$callsReached = $callsTotal*$av/100;
	
	$prognose = ($callsTotal*0.85-$callsReached)/0.15;
	
	$prognose = max(0,ceil($prognose));


?>



<body>
<link rel="shortcut icon" href="../favicon.ico?v=<?php echo md5_file('../favicon.ico') ?>" />

<p class="auto-style1"><strong>Global Service Desk - current availability</strong></p>



<div id="theD" style="left: 10%; top: 14%; width: 84%; height: 77%" >
	<iframe id="if" width="100%" height="100%" border="0" frameBorder="0" src="http://sdet2125/Liveticker.php?ct=1&sd=1">iFrame</iframe>
</div>
<div id="links">Availability [%]</div>

<?php 
if($prognose > 0) echo "<div id='callsL'>calls left: -$prognose </div>"

?>
<div id="untenMittig">time [CET]</div>
<div id="monatsZahl">this month: <?php echo round($av,1)?> %</div>

<script>
/*
if (jsStamp >= 0) $("#if").attr('src',"http://sdet2125/Liveticker.php?ct=1&stamp="+jsStamp);   
else $("#if").attr('src',"http://sdet2125/Liveticker.php?ct=1&sd=1");   
*/

$('#untenMittig').css('left',window.innerWidth/2-$('#untenMittig').width()/2);

if (window.innerWidth < 1300) { // kleiner Quadratmonitor Eizo
	$('#untenMittig').css('left',parseInt($('#theD').css('left'))+135+'px');
	$(".auto-style1").css("font-size","40pt");
	$('#theD').css('left',"10%");
}

$("#if").attr('src',"http://sdet2125/Liveticker.php?ct=1&sd=1");

function refPer() {
	location.reload(true);
}

refInt = setInterval(refPer,100000);
</script>

</body>

</html>
