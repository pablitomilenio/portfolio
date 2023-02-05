<head>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="/Overall.css">
<link rel="stylesheet" type="text/css" href="/Buttons.css">

<!-- Preload important js libraries for applacations that load later (pre-cache) -->
<script src="jquery-2.1.1.js"></script>
<script src="jquery.cookie.js"></script>

<link rel="shortcut icon" href="/Final2.ico" type="image/x-icon">
<link rel="icon" href="/Final2.ico" type="image/x-icon">


<title>Callwave Indicator</title>
<style>
.cwbox {
	display:inline-block;
	border-radius:8px;
	border: 4px solid red;
	padding:8px;
	padding-bottom:18px;
	font-family:MetaPlusLF;
	font-size:5em;
	background-color:darkgrey;
	position:absolute;
	color:#0000FF;
}
.ncw {
	display:inline-block;
	border-radius:8px;
	border: 10px solid green;
	padding:8px;
	padding-bottom:18px;
	font-family:MetaPlusLF;
	font-size:5em;
	background-color:lime;
	position:absolute;
	color:#0000FF;
}

 body {
	overflow:hidden;
}
</style>
<?php
	$query = "SELECT calls_festo FROM `availability_today` order by stamp desc limit 7";
	
	$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
	$res = mysqli_query($mysqli, $query);
	$row = $res->fetch_assoc();
	for($q=0;$q<6;$q++) {
		$row = $res->fetch_assoc();
		$cf[] = $row['calls_festo'];
	}
	//$diff = $cf[0] - $cf[5];
	$diff = $cf[0] - $cf[1];
	//print_r($cf);

?>

<body>
	<div title="schließen" onclick="window.close()" style="opacity:0.5; font-weight:bold;top :0;right:0; background-color:lightgray; z-index:200;position:absolute;border: 4px solid red; padding:5px; font-size:20pt; margin:10px; font-family:Arial, Helvetica, sans-serif">
	X
	</div>

<div id="cont">

</div>
	<script>
		ctr = 0;
		diff = <?php echo $diff ?>;
		function genPos() {
			maxH = window.innerHeight-(91*2);
			maxW = window.innerWidth-(290);
			randH = Math.random();
			randW = Math.random();
			tPos = new Array();
			tPos["x"]=Math.round(randW*maxW);
			tPos["y"]=Math.round(randH*maxH);
			//console.log(tPos["y"]);
			return tPos;
		}
		function genBG() {
			rd = Math.round(Math.random()*10);
			if (rd==10) rd = 9;
			res = "#"+rd+""+rd+rd+rd+rd+rd
			return res;
		}
		function genSqare() {
			cont = $('#cont').html();
			ctr++;
			
			stufe = Math.round(((diff*2.4/3))*10)/10;
			
			//if (stufe > 8) stufe = stufe -3;

			speedTmp = 4000 / (diff*2.4);


			
			if(ctr%3==0) cont += "<div class='cwbox' id='"+ctr+"a'>callwave</div>";
			else cont += "<div class='cwbox' id='"+ctr+"a'>Stufe: "+stufe+"</div>";
			$('#cont').html(cont);
			pos = genPos();
			$('#'+ctr+'a').hide();
			$('#'+ctr+'a').fadeIn(speedTmp);
			$('#'+ctr+'a').css("background-color",genBG());
			$('#'+ctr+'a').css("top",pos["y"]+"px");
			$('#'+ctr+'a').css("left",pos["x"]+"px");

			if (ctr>50) {
				//clearInterval(theInt);
				ctr = 0;
				$('#cont').html("");
			}
		}
		//genSqare();
		if (diff == 0) {
			//alert ('stop');
			cont = "<div class='ncw' id='stop'>Currently no callwave</div>";
			$('#cont').html(cont);
			cw = $('.ncw').width();
			ch = $('.ncw').height();
			$('.ncw').css('top',window.innerHeight/2-ch/2);
			$('.ncw').css('left',window.innerWidth/2-cw/2);
		} else {
			speed = 4000 / (diff*2.4);
			theInt = setInterval("genSqare()",speed);
		}
		
		pld = setInterval("location.reload();",130000);
	</script>
</body>
</html>