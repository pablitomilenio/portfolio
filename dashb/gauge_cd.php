<?php 
function count_workdays($date1,$date2){ 
$firstdate = strtotime($date1); 
$lastdate = strtotime($date2); 
$firstday = date('w',$firstdate); 
$lastday = date('w',$lastdate); 
$totaldays = intval(($lastdate-$firstdate)/86400)+1; 

//check for one week only 
if ($totaldays<=7 && $firstday<=$lastday){ 
$workdays = $lastday-$firstday+1; 
//check for weekend 
if ($firstday==0){ 
$workdays = $workdays-1; 
} 
if ($lastday==6){ 
$workdays = $workdays-1; 
} 

}else { //more than one week 

//workdays of first week 
if ($firstday==0){ 
//so we don't count weekend 
$firstweek = 5; 
}else { 
$firstweek = 6-$firstday; 
} 
$totalfw = 7-$firstday; 

//workdays of last week 
if ($lastday==6){ 
//so we don't count sat, sun=0 so it won't be counted anyway 
$lastweek = 5; 
}else { 
$lastweek = $lastday; 
} 
$totallw = $lastday+1; 

//check for any mid-weeks 
if (($totalfw+$totallw)>=$totaldays){ 
$midweeks = 0; 
} else { //count midweeks 
$midweeks = (($totaldays-$totalfw-$totallw)/7)*5; 
} 

//total num of workdays 
$workdays = $firstweek+$midweeks+$lastweek; 

} 

return ($workdays); 
} //end funtion count_workdays() 


?> 


<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" /> <!-- reset css -->
<script src="jquery-2.1.1.js"></script>
<script src="jquery.cookie.js"></script>


</head>
<style>
.trans {
	/*-ms-transform:rotate(100deg);*/
	-ms-transform-origin: 50% 60%; 
}
.arrow {
	/*display:none;*/
}
#ctr{
	background-color:#cccccc;
	border-radius:12px;
	position:absolute;
	z-index:5;
	font-family:"Courier New", Courier, monospace;
	font-weight:bold;
	font-size:2.8em;
	padding:10px;
	top:35%;
	opacity: 1;
}
#promi{
	color:#ffff00;
	background-color:transparent;
	border-radius:12px;
	position:absolute;
	z-index:5;
	font-family:Arial black;
	font-weight:bold;
	font-size:2.2em;
	padding:10px;
	top:12.3%;
	left:36.8%;
	opacity: 0.8;
	/* text-shadow: 0px 0px 3px #fbfe34; */
	transform: rotate(-25deg);

}

#cont{
	z-index:8;
	/*display:none;*/
}
#cont2{
	z-index:7;
	/*display:none;*/
}
#85a {
	color:#ffff00;
	background-color:green;
	border-radius:5px;
	position:absolute;
	z-index:20;
	font-family:MetaPlusLF;
	font-size:2.2em;
	padding:10px;
	top:120px;
	left:0;
	opacity: 0.8;


}

</style>

<body style="background-color:black;text-align:center;overflow:hidden">
<script>
	cter = 0;
	promi = 0;
</script>

<?php
	$mysqli = mysqli_connect("localhost", "root", "", "statistiki");

	//Erg.
	$res = mysqli_query($mysqli, "select REPLACE(ThisMonth, ',', '.')*100 as thismonth from availability_today order by stamp desc limit 1 " );
	$row = $res->fetch_assoc();
	
	$av = $row['thismonth'];
	//AvToday End of Day
	
	$res2 = mysqli_query($mysqli, "select festo_month from bogendiagramm" );
	$row2 = $res2->fetch_assoc();
	
	$callsTotal = $row2['festo_month'];

	$callsReached = $callsTotal*$av/100;
	
	$prognose = ($callsTotal*0.85-$callsReached)/0.15*-1;
	
	$prognose = ceil($prognose);
	
	if ($prognose > 0) $prognose = round(($callsReached - $callsTotal*0.85)*0.85);
		
	$daysleft = count_workdays(date("d.m.Y"),"31.".date("m.Y"));
	
	//echo $av;
?>

	<img id="tacho" src="img/tacho minus.png?new1" onload="cter++">
	
	<div id="cont" style="position:absolute" class="trans">
			<img id="indic" class="arrow" src="img/zeiger_neu gelb.png" style="">
	</div>
	<div title="schließen"  onclick="window.close()" style="opacity:0.5; font-weight:bold;top :0;right:0; background-color:lightgray; z-index:200;position:absolute;border: 4px solid red; padding:5px; font-size:20pt; margin:10px; font-family:Arial, Helvetica, sans-serif">
	X
	</div>
	
	<div style="opacity:0.5; font-weight:bold;top :0;left:0; background-color:lightgray; z-index:200;position:absolute;border: 2px solid grey; padding:5px; font-size:20pt; margin:10px; font-family:Arial, Helvetica, sans-serif">
	 <?php 
	 if ($prognose<0) echo "Calls bis zum Monatsziel: $prognose<br>Das sind ".round($prognose/$daysleft)." calls pro Tag";
	 else echo "Reserve:  $prognose Calls";
	 ?><br>

	</div>

	<div style="opacity:0.5; font-weight:bold;bottom :0;left:0; background-color:lightgray; z-index:200;position:absolute;border: 2px solid grey; padding:5px; font-size:20pt; margin:10px; font-family:Arial, Helvetica, sans-serif">
	<?php  if ($prognose<0) echo "Täglich pro Person ca.:". max(0,round($prognose/$daysleft/7))."<br>"; ?>
	</div>

	<div style="opacity:0.5; font-weight:bold;bottom :0;right:0; background-color:lightgray; z-index:200;position:absolute;border: 2px solid grey; padding:5px; font-size:20pt; margin:10px; font-family:Arial, Helvetica, sans-serif">
	Genauer Wert: <?php echo round($av*10000)/10000; ?><br>
	</div>



	<img id="gelb" class="arrow" src="img/zeiger_neu gelb.png" onload="cter++" style="display:none;">
	<img id="gruen" class="arrow" src="img/zeiger_neu gruen.png" onload="cter++" style="display:none;">
	<img id="rot" class="arrow" src="img/zeiger_neu rot.png" onload="cter++" style="display:none;">
	
	<div id="ctr"><?php echo round($av,1) ?>%</div>
	<div id="promi"><?php echo round(($av-85)*10,0) ?>‰</div>


</body>

<script>
	deg = <?php echo $av ?>;

	if (deg >= 84.999 ) $('#tacho').attr('src','img/tacho plus.png?new1');

	
	$('#cont').hide();
	$('#promi').hide();
	$('#ctr').hide();
	$('#tacho').height(window.innerHeight-15);
	$('#tacho').hide();
	$('#tacho').fadeIn(1000);


function AnimateRotate(angle) {
	$('#cont').show();
	$('#promi').show();
	$('#tacho').show();
	$('#ctr').show();
	//color	
	if (angle >= 84.999 ) {
		 //$('#indic').attr('src','img/zeiger plain gelb.png');
 		 $('#indic').attr('src','img/zeiger plain gruen.png');
	}
	if (angle < 85 && angle > 80 ) {
		 //$('#indic').attr('src','img/zeiger plain gelb.png');
 		 $('#indic').attr('src','img/zeiger plain gelb.png');
	}
	if (angle <= 80 ) {
		 //$('#indic').attr('src','img/zeiger_neu gelb.png');
 		 $('#indic').attr('src','img/zeiger plain rot.png');
	}



	//Fine Tuning
	if (angle > 90) angle += 0.3;
	if (angle > 92) angle += 0.3;
	if (angle > 94) angle += 0.3;
	
	if (angle < 82) angle -= 0.3;
	if (angle < 80) angle -= 0.3;
	if (angle < 78) angle -= 0.1;
	if (angle < 74) angle -= 0.3;
    //LIMIT
	if (angle < 72) angle = 72;
	//if (angle < 85) angle -= 0.2;
	
	
	//$('#arrow').height(parseInt($('#arrow').css('height'))*prop);
	//$('#arrow').fadeIn();
	
	
	/*
	if (angle > 89) { //until 100
		exc = angle-89
		exc = exc*0.05;
		exc = exc+89;
		angle = exc;
	}
*/
	
	if(true) angle = (angle-85)*24;
	
	//console.log(angle);
	
    // caching the object for performance reasons
    var $elem = $('#cont');

	opac = 1;
    // we use a pseudo object for the animation
    // (starts from `0` to `angle`), you can name it as you want
    $({deg: 0}).animate({deg: angle}, {
        duration: 5000,
        step: function(now) {
        	opac = 1;
            // in the step-callback (that is fired each step of the animation),
            // you can use the `now` paramter which contains the current
            // animation-position (`0` up to `angle`)
            //console.log(now);
            $elem.css({
                transform: 'rotate(' + now + 'deg)',
                opacity: opac
            });

        }
    });
}

function checkL() {

	if(cter >= 2) {
	
			
		origH = 1195;
		newH = window.innerHeight-15;
		prop = newH/origH;
		$('.arrow').height(912*prop);
		
		
		w = parseInt($('#cont').css('width'))/2;
		h = parseInt($('#cont').css('height'))/1.68;
		$('#cont').css({top: window.innerHeight/2-h, left: window.innerWidth/2-w, position:'absolute'});
		
		adj  = prop*prop*75;
		
	
		cw = parseInt($('#ctr').css('width'))/2;
		$('#ctr').css({left: window.innerWidth/2-cw-adj, position:'absolute','font-size':window.innerHeight*2.8/564+"em"});
		
		
		///pw = parseInt($('#promi').css('width'))/2;
		$('#promi').css({'font-size':window.innerHeight*2.4/564+"em"});

		if (deg < 85) $('#promi').css({transform:'rotate(24deg)',top:'12%',left:'53%','font-size':window.innerHeight*1.8/564+"em"});
}


	if(cter >= 4) {
		setTimeout("AnimateRotate(deg)",2000);
		clearInterval(theint);	//funktioniert nicht muss noch geprüft werden
		cter = 1;
	}
}


$( document ).ready(function() {


	theint = 0;



	theint = setInterval(checkL,1000);
	pld = setInterval("location.reload();",30000);
});



</script>
</html>