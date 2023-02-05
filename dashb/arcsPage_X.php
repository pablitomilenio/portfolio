<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
$res = mysqli_query($mysqli, "select * from availability_today order by stamp desc");
$row = $res->fetch_assoc();


$res2 = mysqli_query($mysqli, "select * from bogendiagramm order by stamp desc");
$row2 = $res2->fetch_assoc();

$query3 = "select * from status";
$res3 = mysqli_query($mysqli,$query3);
$row3 = $res3->fetch_assoc();
$err = $row3['no_data'];

$res4 = mysqli_query($mysqli, "select * from percfestobogen");
$row4 = $res4->fetch_assoc();




?>

<head>
<meta content="IE=Edge" http-equiv="X-UA-Compatible" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<script src="/jquery-2.1.1.js"></script>
<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
if (dd <= 10) dd = '0'+dd;
if (mm <= 10) mm = '0'+mm;

var yyyy = today.getFullYear();
today = dd+'.'+mm+'.'+yyyy;

time = '<?php echo $row["time"]; ?>';
time = time.substr(0,5);

</script>

<title>Arc Demo</title>
<style type="text/css">
<!--
body {
	background-color: #4a4d4d;
	background-repeat: no-repeat;
	overflow:hidden;
	font-family:MetaPlusLF;
	background-image:url('Bogen_New2.png');
}
font {
	font-weight:bold;
}
#eingabe {
	background-color: transparent;
	top: 20px;
	left: 40px;
	position: absolute;
}
#myCanvas {
	position: absolute;
}
.nodisp{
	display:none;
}
#FHead {
	color:#0091dc;
	left:400px;
    box-shadow: 0px 3px 3px #404040;
}
#PHead {
	color:#b7d6ec;
	left:600px;
    box-shadow: 0px 3px 3px #404040;
}
#THead {
	color:#a6a6a6;
	left:900px;
    box-shadow: 0px 3px 3px #404040;
}
#DHead {
	color:#92d050;
	left:1100px;
    box-shadow: 0px 3px 3px #404040;
}

.headers{
	float:left;
	font-size:36pt;
	font-weight:bold;
	border:2px solid;
	border-color:grey;
	margin-left:10px;
	width:230px;
	text-align:center;
	padding-top:10px;
	height:63px;
	letter-spacing:-1px;
}
#hContainer{
	position:absolute;
	left:540px;
	top:230px;
}
hr{
	height: 2px;
	background-color: grey;
	border:0;
    box-shadow: 0px 3px 3px #404040;
}

#hrdiv {
	position:absolute;
	left:0px;
	top:172px;
	width:100%;
	height:5px;
}
#superTitle{
	color:#DDDDDD;
	font-size:80pt;
	font-weight:bold;
	position:absolute;
	left:345px;
	top:30px;
	letter-spacing:-1px
}
.cellsA{
	border: 2px solid;
	border-color:grey;
	float:left;
	margin-left:10px;
	text-align:center;
	width:230px;
	padding-top:20px;
	height:90px;
    box-shadow: 0px 3px 3px #404040;
}
.cellsB{ 
	border: 2px solid;
	border-color:grey;
	float:left;
	margin-left:10px;
	text-align:center;
	width:230px;
	padding-top:5px;
	height:43px;
	font-weight:100;
    box-shadow: 0px 3px 3px #404040;
}
.darker{
	background-color:#404040;
    /*background: rgba(200, 54, 54, 0.5); */
}
#CRow1{
	position:absolute;
	left:300px;
	top:580px;/*595*/
	font-size:40pt;
	font-weight:bold;
    color: #bfbfbf;
}
#CRow2{
	position:absolute;
	left:300px;
	top:700px;
	font-size:24pt;
	font-weight:bold;
	color:white;
}
#CRow3{
	position:absolute;
	left:300px;
	top:757px;
	font-size:24pt;
	font-weight:bold;
	color:white;
}
#CRow4{
	position:absolute;
	left:300px;
	top:815px;
	font-size:24pt;
	font-weight:bold;
	color:white;
}
.adj {
  padding-top:3px;
  height:110px;
}

#CRow5{
	position:absolute;
	left:300px;
	top:890px;
	font-size:18pt;
	font-weight:100;
	color:white;
	padding:0;
	padding-top:4px;
	letter-spacing:-1px;
	line-height:35px;
}
#noData {
	position:absolute;
	left:5%;
	top:10%;
	width:85%;
	font-size:60pt;
	font-weight:bold;
	color:red;
	z-index:100;
	background-color:black;
	border-radius:20px;
	padding:20px;
	display:none;
}
-->
</style>
</head>


<body >

<div id="noData">

</div>
	<div title="schließen"  onclick="window.close()" style="opacity:0.5; font-weight:bold;top :0;right:0; background-color:lightgray; z-index:200;position:absolute;border: 4px solid red; padding:5px; font-size:20pt; margin:10px; font-family:Arial, Helvetica, sans-serif">
	X
	</div>

<div id="FeTxt" class="nodisp"></div>
<div id="ProdTxt" class="nodisp"></div>
<div id="TTSTxt" class="nodisp"></div>
<div id="DidTxt" class="nodisp"></div>

<div id="superTitle">Service Level - availability</div>
<div id="hrdiv"><hr></div>

<div id="hContainer">

	<div id="FHead" class="headers">FESTO</div>
	<div id="PHead" class="headers">Production</div>
	<div id="THead" class="headers">VIP</div>
	<div id="DHead" class="headers">TTS</div>

</div>

<div id="CRow1" class="CRows">
	<div id="cell1" class="cellsA shadow" style="font-weight:100;padding-top:20px;font-size:22pt; height:90px;line-height:35px;">
	<script>document.write(today)</script><br><script>document.write(time)</script>
	</div>
	<div id="cell2" class="cellsA darker">
	</div>
	<div id="cell3" class="cellsA darker">
	</div>
	<div id="cell4" class="cellsA darker">
	</div>
	<div id="cell5" class="cellsA darker">
	</div>
</div>
<div id="CRow2" class="CRows">
	<div id="cell1B" class="cellsB darker">
	today
	</div>
	<div id="cell2B" class="cellsB">
	<?php echo $row2["festo_today"]; ?>
	</div>
	<div id="cell3B" class="cellsB">
	<?php echo $row2["produktion_today"]; ?>
	</div>
	<div id="cell4B" class="cellsB">
	<?php echo $row2["vip_today"]; ?>
	</div>
	<div id="cell5B" class="cellsB">
	<?php echo $row2["tts_today"]; ?>
	</div>
</div>
<div id="CRow3" class="CRows">
	<div id="cell1D" class="cellsB darker">
	this week
	</div>
	<div id="cell2D" class="cellsB">
	<?php echo $row2["festo_week"]; ?>
	</div>
	<div id="cell3D" class="cellsB">
	<?php echo $row2["produktion_week"]; ?>
	</div>
	<div id="cell4D" class="cellsB">
	<?php echo $row2["vip_week"]; ?>
	</div>
	<div id="cell5D" class="cellsB">
	<?php echo $row2["tts_week"]; ?>
	</div>
</div>

<div id="CRow4" class="CRows">
	<div id="cell1C" class="cellsB darker">
	this month
	</div>
	<div id="cell2C" class="cellsB">
	<?php echo $row2["festo_month"]; ?>
	</div>
	<div id="cell3C" class="cellsB">
	<?php echo $row2["produktion_month"]; ?>
	</div>
	<div id="cell4C" class="cellsB">
	<?php echo $row2["vip_month"]; ?>
	</div>
	<div id="cell5C" class="cellsB">
	<?php echo $row2["tts_month"]; ?>
	</div>
</div>
<div id="CRow5" class="CRows">
	<div id="cell1E" class="cellsA adj" style="font-size:22pt; color: #bfbfbf;">
	<font>SLA</font><br>Service-Level-<br>Agreement
	</div>
	<div id="cell2E" class="cellsA adj">
		<div style="float:left;padding-left:50px;"><img src="/3colors.png">
		</div>
		<div style="float:left;margin-left:5px">> 85%<br>&nbsp;&nbsp;80% - 85%<br>< 80%<br>
		</div>
	</div>
	<div id="cell3E" class="cellsA adj">
		<div style="float:left;padding-left:50px;"><img src="/3colors.png">
		</div>
		<div style="float:left;margin-left:5px">> 95%<br>&nbsp;&nbsp;90% - 95%<br>< 90%<br>
		</div>
	</div>
	<div id="cell4E" class="cellsA adj">
		<div style="float:left;padding-left:50px;"><img src="/3colors.png">
		</div>
		<div style="float:left;margin-left:5px">> 95%<br>&nbsp;&nbsp;90% - 95%<br>< 90%<br>
		</div>
	</div>
	<div id="cell5E" class="cellsA adj">
		<div style="float:left;padding-left:50px;"><img src="/3colors.png">
		</div>
		<div style="float:left;margin-left:5px">> 85%<br>&nbsp;&nbsp;80% - 85%<br>< 80%<br>
		</div>
	</div>
</div>




<canvas id="myCanvas" height="200" style="left: 555px; top: 350px" top="310" width="1300">
</canvas> 

<script>
percentage1 = parseFloat('<?php echo $row4["fto"]; ?>')/100;
percentage2 = parseFloat('<?php echo $row["Produktion"]; ?>')/100;
percentage3 = parseFloat('<?php echo $row["Didactic"]; ?>')/100;
percentage4 = parseFloat('<?php echo $row["TTS"]; ?>')/100;


$('#FeTxt').html(percentage1*100);
$('#ProdTxt').html(percentage2*100);
$('#TTSTxt').html(percentage3*100);
$('#DidTxt').html(percentage4*100);

$('#cell2').html(parseFloat('<?php echo $row4["fto"]; ?>')+"%");
$('#cell3').html(parseFloat('<?php echo $row["Produktion"]; ?>')+"%");
$('#cell4').html(parseFloat('<?php echo $row["Didactic"]; ?>')+"%");
$('#cell5').html(parseFloat('<?php echo $row["TTS"]; ?>')+"%");



      function changeVals() {
      
      var degrees1 = (percentage1 * 360.0)-90;
	  var radians1 = degrees1 * Math.PI / 180.0;

      var degrees2 = (percentage2 * 360.0)-90;
	  var radians2 = degrees2 * Math.PI / 180.0;

      var degrees3 = (percentage3 * 360.0)-90;
	  var radians3 = degrees3 * Math.PI / 180.0;

      var degrees4 = (percentage4 * 360.0)-90;
	  var radians4 = degrees4 * Math.PI / 180.0;
	  
	  radStart = -90* Math.PI / 180.0;


	      var canvas = document.getElementById('myCanvas');
	      var context = canvas.getContext('2d');
	      canvas.width = canvas.width;
	      var centerY = canvas.height / 2;
	      var radius = 78;

	      
	      var centerX1 = 110;
	
	      context.beginPath();
	      context.arc(centerX1, centerY, radius, radStart,radians1, false);
	
	      context.lineWidth = 45;

	      
	      if($("#FeTxt").html() > 85) 		context.strokeStyle = '#009242';
	      else if($("#FeTxt").html() >= 80)   context.strokeStyle = '#ffc000';	  	 
	      else 							    context.strokeStyle = '#c00000';	      
	      context.stroke();
	      
	      	      var centerX2 = centerX1+245;
	
	      context.beginPath();
	      context.arc(centerX2, centerY, radius, radStart,radians2, false);
	
	      context.lineWidth = 45;

	      
	      if($("#ProdTxt").html() > 95) 		context.strokeStyle =  '#009242';
	      else if($("#ProdTxt").html() >= 90)   context.strokeStyle = '#ffc000';	  	 
	      else 							    context.strokeStyle = '#c00000';	      
	      context.stroke();



	      var centerX3 = centerX2+245;
	
	      context.beginPath();
	      context.arc(centerX3, centerY, radius, radStart,radians3, false);
	
	      context.lineWidth = 45;

	      
	      if($("#TTSTxt").html() > 95) 		context.strokeStyle = '#009242';
	      else if($("#TTSTxt").html() >= 90)   context.strokeStyle = '#ffc000';	  	 
	      else 							    context.strokeStyle = '#c00000';
	      
	      context.stroke();



		  var centerX4 = centerX3+245;
	
	      context.beginPath();
	      context.arc(centerX4, centerY, radius, radStart,radians4, false);
	
	      context.lineWidth = 45;

	      
	      if($("#DidTxt").html() > 85) 		context.strokeStyle = '#009242';
	      else if($("#DidTxt").html() >= 80)   context.strokeStyle = '#ffc000';	  	 
	      else 							    context.strokeStyle = '#c00000';
	      
	      context.stroke();



      }
      changeVals();
      
      
      
      
$(document).keypress(function(e) {
    if(e.which == 13) {
        changeVals();

     }
});

theInt = setInterval("location.reload();",60000);


err = <?php echo $err; ?>;
if(err) {
	//$('#noData').show();
}



if(window.innerWidth < 1300) {
	$("body").css("-ms-transform","scale(0.95)");
	$("body").css("width","120%");
	$("body").css("margin-left","-24%");
	$("body").css("margin-top","-2%");
	$("body").css("padding-right","20%");
}



    </script>

</body>

</html>
