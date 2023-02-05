<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://www.zamza.cl/contabilidad/Leistungsindex/ -->
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="shortcut icon" href="../favicon.ico?new" type="image/x-icon">
<link rel="icon" href="../Final.ico" type="image/x-icon">

<script src="../jquery-2.1.1.js"></script>

<title>Current Availability LT</title>
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
 right:11%;
 position:absolute;
 font-size: 40pt;
}


.auto-style1 {
	text-align: center;
	font-family: MetaPlusLF;
	color: #C0C0C0;
	top:0px;
	margin:0px;
	margin-top:15px;
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

?>



<body>
<link rel="shortcut icon" href="../favicon.ico?v=<?php echo md5_file('../favicon.ico') ?>" />

<p class="auto-style1"><strong>Global Service Desk - monthly availability LT</strong></p>



<div id="theD" style="left: 0%; top: 14%; width: 100%; height: 87%; padding:0;" >
	<iframe id="if" width="100%" height="100%" border="0" frameBorder="5" src="http://sdet2125/gauge_cd.php">iFrame</iframe>
</div>

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

$("#if").attr('src',"http://sdet2125/gauge_cd.php");

function refPer() {
	location.reload(true);
}

refInt = setInterval(refPer,100000);
</script>

</body>

</html>
