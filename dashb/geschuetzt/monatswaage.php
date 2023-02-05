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
	background-color:#9BF4E0;
	border-radius:12px;
	position:absolute;
	z-index:5;
	font-family:"Courier New", Courier, monospace;
	font-weight:bold;
	font-size:2.8em;
	padding:10px;
	top:35%;
	opacity: 0.8;
}
#cont{
	z-index:7;
	/*display:none;*?
}
</style>

<body style="background-color:black;text-align:center;overflow:hidden">
<script>
	cter = 0;
</script>

<?php
	$mysqli = mysqli_connect("localhost", "pablo", "portaf", "statistiki");

	//Erg.
	$res = mysqli_query($mysqli, "select REPLACE(ThisMonth, ',', '.')*100 as thismonth from availability_today order by stamp desc limit 1 " );
	$row = $res->fetch_assoc();
	//AvToday End of Day

	$av = $row['thismonth'];
	
	//echo $av;
?>
	<img id="tacho" src="img/tachom3.png" onload="cter++">
	
	<div id="cont" style="position:absolute" class="trans">
			<img id="indic" class="arrow" src="img/zeiger_gruen.png" style="">
	</div>


	<img id="gelb" class="arrow" src="img/zeiger_gelb.png" onload="cter++" style="display:none;">
	<img id="gruen" class="arrow" src="img/zeiger_gruen2.png" onload="cter++" style="display:none;">
	<img id="rot" class="arrow" src="img/zeiger_rot.png" onload="cter++" style="display:none;">
	
	<div id="ctr"><?php echo round($av,1) ?>%</div>

</body>

<script>

deg = <?php echo $av ?>;

$('#tacho').height(window.innerHeight-15);

origH = 1195;
newH = parseInt($('#tacho').css('height'));
prop = newH/origH;
$('.arrow').height(parseInt($('.arrow').css('height'))*prop);

//85 = 0
//89 = 92

//92 -85 = 7

// 7 = 89 = 92deg
// 0 = 85 = 0 deg


w = parseInt($('#cont').css('width'))/2;
h = parseInt($('#cont').css('height'))/2;
$('#cont').css({top: window.innerHeight/2-h, left: window.innerWidth/2-w, position:'absolute'});



$('#ctr').css({'font-size':window.innerHeight*2.8/564+"em"});
cw = parseInt($('#ctr').css('width'))/2;
$('#ctr').css({left: window.innerWidth/2-cw, position:'absolute','font-size':window.innerHeight*2.8/564+"em"});

/*
tp = $('#gruen').position();
$('#gelb').css({top:tp.top, left:tp.left, position:'absolute'});
$('#rot').css({top:tp.top, left:tp.left, position:'absolute'});
$('#gruen').css({top:tp.top, left:tp.left, position:'absolute'});
*/
//$('.arrow').css({top: window.innerHeight/2-h, left: window.innerWidth/2-w, position:'absolute'});

theint = 0;

$('#cont').hide();
function AnimateRotate(angle) {
	if (angle > 93) alert('This Display is not suitable for beginning of the first day of the month');
	$('#cont').fadeIn();
	//color	
	if (angle < 85 && angle >= 80 ) $('#indic').attr('src','/img/zeiger_gelb.png');
	if (angle < 80 ) $('#indic').attr('src','img/zeiger_rot.png');
	if (angle >= 85 ) $('#indic').attr('src','img/zeiger_gruen2.png');
	
	//Fine Tuning
	if (angle > 87) angle += 0.2;
	if (angle > 88.2) angle += 0.2;
	if (angle < 84.2) angle -= 0.2;
	if (angle < 82.8) angle -= 0.2;
	if (angle < 81.6) angle -= 0.2;
	
	
	//$('#arrow').height(parseInt($('#arrow').css('height'))*prop);
	//$('#arrow').fadeIn();
	if(true) angle = (angle-85)*21;
	//console.log(angle);
	
    // caching the object for performance reasons
    var $elem = $('#cont');

    // we use a pseudo object for the animation
    // (starts from `0` to `angle`), you can name it as you want
    $({deg: 0}).animate({deg: angle}, {
        duration: 1000,
        step: function(now) {
            // in the step-callback (that is fired each step of the animation),
            // you can use the `now` paramter which contains the current
            // animation-position (`0` up to `angle`)
            $elem.css({
                transform: 'rotate(' + now + 'deg)'
            });
        }
    });
}

function checkL() {
	if(cter >= 4) {
		setTimeout(AnimateRotate(deg),2000);
		clearInterval(theint);	//funktioniert nicht muss noch geprüft werden
		cter = 1;
	}
}


$( document ).ready(function() {
	theint = setInterval(checkL,1000);
	pld = setInterval("location.reload();",30000);
});



</script>
</html>