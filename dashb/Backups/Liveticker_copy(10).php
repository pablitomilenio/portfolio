<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://www.zamza.cl/contabilidad/Leistungsindex/ -->
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

<script src="jquery-2.1.1.js"></script>
<script src="jquery.cookie.js"></script>

<title>Liveticker</title>
<style type="text/css">
<!--
body {
	background-color: #4a4d4d;
	margin: 0;
	width: 100%;
	height: 110%;
	padding: 0;
	overflow: hidden;
	font-family:MetaPlusLF;
}
#graph {
}
#nodisp {
	height:100%;
	position:absolute;
}
#nodispi {
	background-color:orange;
	position:absolute;
	margin-left:100px;
	padding-left:50px;
	top:50%;
	width: 900px;
	font-size:50pt;
}
#timeDisp{
	/* border: 1px solid black; */
	border:0;
	left:405px; 
	top : 15px;
	height: 108px;
	width: 332px;
	position:absolute;
	display:none;
	z-index:20;
	border-radius:8px;
	cursor:none;
	/* background-color:orange; */
}
#percWindow{
	left:0px; 
	top : 112px; 
	height: 108px; 
	width: 327px; 
	position:absolute; 
	z-index:10;
	cursor:none;
	display:none;
}
#theGraphs {
 /*	background-color: orange; */
	position:absolute;
	width: 60%;
	top:10px;
	left:10px;
	margin: 0;
	z-index:0;
	padding: 0;
	cursor:none;
	/* opacity:0.4; */
}
.bgGreen {
	background: #92d050;
	background-color:transparent;
}
.bgYellow {
	background: #ffff00;
	background-color:transparent;
}
.bgRed {
	background: #ff0000;
	background-color:transparent;
}
#theFill{
	z-index:-5;
	/*background-color:fuchsia; */
	position:absolute;
	margin:0px;
	border-radius:8px;
}
.hours{
	font-size:80px;
	float:left;
}

-->
</style>
</head>

<body >

<div id="percWindow">
	<img id="firstDigit" src="Ziffern/1.png"> 	
	<img id="secondDigit" src="Ziffern/0.png"> 
	<img id="comma" src="Ziffern/Komma.png"> 
	<img id="thirdDigit" src="Ziffern/0.png"> 
	<img src="Ziffern/perc.png"></div>

<div id="timeDisp">
	<div id="hour1" class="hours">0</div>
	<div id="hour2" class="hours">0</div>
	<div id="colon" class="hours">:</div>
	<div id="minute1" class="hours">0</div>
	<div id="minute2" class="hours">0</div>
</div>

<div id="theGraphs" align="center">
	<div id="theFill"></div>
	<canvas id="graph" height="100%" width="100%">
	<div align="left">
	IhrInternet-Browseristzualt!<br>SieverwendenzurZeit:<br><br><font face="arial">"Mozilla/5.0(WindowsNT6.1;WOW64)AppleWebKit/537.36(KHTML,likeGecko)Chrome/38.0.2125.101Safari/537.36OPR/25.0.1614.50"</font><br><br>HierkönnenSieIhrenBrowsernachWahlaktualisieren<br><br><a href="http://windows.microsoft.com/en-US/internet-explorer/downloads/ie-9/worldwide-languages">=&gt;InternetExplorer</a><br><a href="http://www.google.com/chrome/intl/de/landing_win.html?hl=de&amp;hl=de">=&gt;Chrome</a><br><a href="http://www.mozilla.org/en-US/firefox/all.html">=&gt;Firefox</a><br><br>DurchdieAktualisierungwirdIhrInterneterlebnisharwarebeschleunigtundkompatibler
	</div></canvas>
<script>

$('#theFill').width(window.innerWidth-164);
$('#theFill').height(window.innerHeight-69);
$('#theFill').css('left','109px');
$('#theFill').css('top','30px');
</script>
<script>

function getBaseLog(x, y) {
    return Math.log(y) / Math.log(x);
}


function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function getDayFrac(time) {
	tArr = new Array();
	tArr = time.split(":");
	horas = parseInt(tArr[0]);
	minutos = parseInt(tArr[1]);
	dec = minutos / 60;
	number = horas + dec;
	return number / 24;
}

function fracToTime(timeFrac) {
	tmp = timeFrac * 24;
	horas = Math.floor(tmp);
	minutosNum = (tmp - horas)*100;
	minutos = Math.floor(minutosNum * 60 /100);
	if (minutos < 10) minutos = "0" + minutos;
	return horas+":"+minutos;
}

function txToFrac(TX){
tStart = ts[0];
tEnd = ts[ts.length-1];

}

function toggleClass(name){
	if (name == 'Green') nameB = '#92d050';
	if (name == 'Yellow') nameB = '#ffff00';
	if (name == 'Red') nameB = '#ff0000';
	$("#theFill").css('background-color',nameB);
}

dipos = 0;
dival = 0;

function plotLine(unix,buTag,betr) {// Unix sind die Unix-Timestamps
	$("#percWindow").fadeIn("slow");
	// unix: Timestamps
	// buTag: labesls
	// betr: y values
	var graph;
	var xPadding = 110;
	var yPadding = 60;
	var xes = new Array();
	var yes = new Array();
	wdPees = new Array();
	
	for(q=0;q<unix.length;q++) {
		xes[q] = unix[q];
		yes[q] = betr[q];
	}
	
	xesBeta = xes; //xesBeta wird unten sortiert. Die Xe sind nicht genau in aufsteigender Reihenfolge.
				   // Daher gibt es einen Graphikfehler

	var buTagJ = new Array();
	
	for (i=0;i<buTag.length;i++){
		buTagJ[i] = buTag[i];
		//alert(buTagJ[i]);
	}

			
	// Returns the max Y value in our data list
	function getMaxY() {
		var max = 0;
		
		for(var i = 0; i < yes.length; i ++) {
			if(yes[i] > max) {
				max = yes[i];
			}
		}
		
		max += 10 - max % 10;
		return max;
	}
	
	/*
	// Return the x pixel for a graph point
    function getXPixel(val) {
		return ((graph.width - xPadding) / betr.length) * val + (xPadding * 1.5);
	}*/
	
	function getXPixel(val) {
		//           
		//alert(graph.width);
	 //alert(getMaxX()); //22
		//xesBeta.sort();
		maxX = xesBeta[xes.length-1];
		minX = xesBeta[0];
		spanData = maxX-minX;
		spanScreen = (graph.width-xPadding*2);
		//alert("spanData:"+spanData+" spanScreen:"+spanScreen+" minX:"+minX+" maxX:"+maxX);
		//return xPadding+10+data.values[val].X/minX*50;
		myResult = spanScreen-((maxX-xes[val])*(spanScreen/spanData)-xPadding-10);
		if (myResult < 1) {
			alert("Fehler:Der letzte Wert auf der X-Achse ist geringer als der erste");
			//alert("spanData:"+spanData+" spanScreen:"+spanScreen+" minX:"+minX+" maxX:"+maxX);	
		}
		return myResult

		//return 30;
		//return graph.width - (((graph.width - xPadding) / getMaxX()) * val) - xPadding;
	}
	
	// Return the y pixel for a graph point
	function getYPixel(val) {
		return graph.height - (((graph.height - 0) / getMaxY()) * val) - yPadding*2+20; // 0 means yPadding
	}

	$(document).ready(function() {
		graph = canvas;
		var c = graph[0].getContext('2d'); 
			
		//clearing the Canvas
		c.clearRect(0,0,canvas.width,canvas.height);
		
		
		
		// draw X and Y Axis Pointer
		dotSize = 11;
		c.beginPath();
		c.fillStyle =  'white';
		c.arc(getXPixel(l-1), canvas.height+20-yPadding, dotSize, 0, Math.PI * 2, true);
		c.fill();

		dotSize = 10;
		c.beginPath();
		c.fillStyle =  mLineColor;
		c.arc(getXPixel(l-1), canvas.height+20-yPadding, dotSize, 0, Math.PI * 2, true);
		c.fill();
		
		dotSize = 11;
		c.beginPath();
		c.fillStyle =  'white';
		c.arc(xPadding, getYPixel(yes[l-1]), dotSize, 0, Math.PI * 2, true);
		c.fill();

		dotSize = 10;
		c.beginPath();
		c.fillStyle =  mLineColor;
		c.arc(xPadding, getYPixel(yes[l-1]), dotSize, 0, Math.PI * 2, true);
		c.fill();
		



		
				
		c.lineWidth = 2;
		c.strokeStyle = 'black';
		c.font = 'italic 120pt MetaPlusLF';
		c.textAlign = "center";
				
		// Draw the axisesp
		
		

		if (c.setLineDash) c.setLineDash([3,3]);
		
		c.beginPath();
		c.moveTo(xPadding, yPadding-30);
		c.lineTo(xPadding, graph.height+20 - yPadding);
		c.lineTo(graph.width - xPadding/2, graph.height+20 - yPadding); // Y-Achse
		c.stroke();
		
	   
		// Draw the Y value texts
		c.textAlign = "right"
		c.textBaseline = "middle";
		
		c.fillStyle = '#BFBFBF';
		c.font = '27pt MetaPlusLF';
//		c.fillText(60+"% -", xPadding + 0, getYPixel(60-cutOff));		

		c.fillText("2%", xPadding - 20, getYPixel(getBaseLog(1.244,2)) );
		c.fillText("5%", xPadding - 20, getYPixel(getBaseLog(1.244,5)) );
		c.fillText("10%", xPadding - 20, getYPixel(getBaseLog(1.244,10)) );
		c.fillText("20%", xPadding - 20, getYPixel(getBaseLog(1.244,20)) );
		c.fillText("40%", xPadding - 20, getYPixel(getBaseLog(1.244,40)) );
		c.fillText("90%", xPadding - 20, getYPixel(90-cutOff));
		c.fillText("100%", xPadding - 20, getYPixel(100-cutOff));
		
		


		// Draw vertical Lines |||||
		maxTime = ts[ts.length-1]; 
		minMxTm = parseInt(fracToTime(maxTime).substr(-2,2));
		addFrc = minMxTm/60;

		var labelTimes = new Array();
		for(y=0;getDayFrac(xPossArr[y])<=maxTime;y++) {
			labelTimes.push(xPossArr[y]);
		}

		pixelPerUnit = ((graph.width - (xPadding+40)) / (labelTimes.length+addFrc));


		if (c.setLineDash) c.setLineDash([2,2]);
		c.lineWidth = 1;
		if(dival < 85 && dival >= 80) c.strokeStyle = 'black';
		else  c.strokeStyle = 'white';

		for(h=0;h<labelTimes.length;h++) {
			c.beginPath();		
			c.moveTo((xPadding+48)+pixelPerUnit*h, graph.height - yPadding);
			c.lineTo((xPadding+48)+pixelPerUnit*h, yPadding-10);
			c.stroke();		

		}
		
		//rightCut = (xPadding+48)+pixelPerUnit*(h-1);
		rightCut = (xPadding+48)+pixelPerUnit*(h);
		
		if (c.setLineDash) c.setLineDash([0,0]);
		//end vertical lines



// Draw every 10 % a hline
		var linesArr = [2,5,10,20,40,90,100];
		f=0;
		while(f<linesArr.length) {
			if (c.setLineDash) c.setLineDash([2,2]);
			
			if((dival >= 80) && (dival <= 84))	c.strokeStyle = 'black';
			else c.strokeStyle = 'white';
			c.lineWidth = 1;
	
			c.beginPath();
			
			
			if(linesArr[f] < 80) {           	 
            	c.moveTo(xPadding-12,  getYPixel(getBaseLog(1.244,linesArr[f])));
            	c.lineTo(rightCut,  getYPixel(getBaseLog(1.244,linesArr[f])));
			}
			else {
				c.moveTo(xPadding-12,  getYPixel(linesArr[f]-cutOff));
				if(f != 80) c.lineTo(rightCut,  getYPixel(linesArr[f]-cutOff));
			}
			c.stroke();
			//console.log(f);
			f++;
		}

		c.font = 'bold 30pt MetaPlusLF';
		c.fillText(80+"% ", xPadding - 15, getYPixel(80-cutOff));		
		c.fillText(85+"% ", xPadding - 15, getYPixel(85-cutOff));
		
		
		
		// Draw the dashed lines
		if (c.setLineDash) c.setLineDash([12,3,3,3]);
		
		if((dival >= 80) && (dival <= 84))	c.strokeStyle = 'black';
		else c.strokeStyle = 'white';
		c.lineWidth = 2;
		//c.setLineDash(5,10);
		
		c.beginPath();
		c.moveTo(xPadding-8, getYPixel(85-cutOff));
		c.lineTo(rightCut, getYPixel(85-cutOff));
		c.stroke();

		c.beginPath();
		c.moveTo(xPadding-8, getYPixel(80-cutOff));
		c.lineTo(rightCut, getYPixel(80-cutOff));
		c.stroke();
		
		if (c.setLineDash) c.setLineDash([0,0]);			

		
		c.strokeStyle =  lineColor;
		function begReColor(col1,tlim) {
			x1 = getXPixel(i-1);
			x2 = getXPixel(i);
			y1 = yes[i-1];
			y2 = yes[i];
			slope = (y2 - y1)/(x2 - x1);
			cconst = y1 - slope*x1;
			newXPos = (tlim-cconst)/slope;	
 			toFracFactor = getXPixel(i)/xes[i];
			c.lineTo(newXPos, getYPixel(tlim));	
			breakTXL.push(newXPos/toFracFactor);
			breakTX.push(newXPos);
			breakTY.push(getYPixel(tlim));	
			c.strokeStyle =  col1;
			c.stroke();				
			c.beginPath();
			c.moveTo(newXPos, getYPixel(tlim));	
		}

		function endReColor(col2,tlim) {
			x1 = getXPixel(i-1);
			x2 = getXPixel(i);
			y1 = yes[i-1];
			y2 = yes[i];
			slope = (y2 - y1)/(x2 - x1);
			cconst = y1 - slope*x1;
			newXPos = (tlim-cconst)/(slope);
 			toFracFactor = getXPixel(i)/xes[i];
			breakTXL.push(newXPos/toFracFactor);
			breakTX.push(newXPos);
			breakTY.push(getYPixel(tlim));	
				
			c.lineTo(newXPos, getYPixel(tlim));		
			c.strokeStyle =  mLineColor;
			c.stroke();				
			c.beginPath();
			c.moveTo(newXPos, getYPixel(tlim));
			c.lineTo(x2,getYPixel(y2));
			c.strokeStyle =  col2;
			c.stroke();				
			//console.log("x1:"+Math.round(x1)+" x2:"+Math.round(x2)+
			//" y1:"+y1+" y2:"+y2+" newX:"+Math.round(newXPos)+" gyp:"+getYPixel(tlim));
		}

		
		
		// Draw the line graph
	
		c.lineWidth = 11;
		for(var i = 1; i < yes.length; i ++) {
			c.beginPath();
			c.moveTo(getXPixel(i-1), getYPixel(yes[i-1]));

			if (yes[i-1] >= mlim) { //starts green
				if(yes[i] >= mlim) { // end also green
					c.strokeStyle =  lineColor;
					toggleClass("Green");
				} 
				if(yes[i] < mlim) { // ends in yellow
					begReColor(lineColor,mlim);
					c.strokeStyle =  mLineColor;
					toggleClass("Yellow");
				}
				if(yes[i] <= llim) { // ends in red
					begReColor(lineColor,mlim);
					endReColor(lLineColor,llim);
					toggleClass("Red");
				}

			}	
			if( (yes[i-1] > llim) && (yes[i-1] < mlim) ) 	{ //starts yellow	
				if(yes[i] <= llim) { // end downards to red
					begReColor(mLineColor,llim);
					c.strokeStyle =  lLineColor;
					toggleClass("Red");
				} if(yes[i] >= mlim) { // end upwards in green
					begReColor(mLineColor,mlim);
					c.strokeStyle =  lineColor;
					toggleClass("Green");
				} 
			}
			if (yes[i-1] <= llim) 	{ // starts red
				if(yes[i] <= llim) { // end also red
					c.strokeStyle =  lLineColor;
				} 
				if(yes[i] > llim) { // ends in yellow
					begReColor(lLineColor,llim);
					c.strokeStyle =  mLineColor;
					toggleClass("Yellow");
				}
				if(yes[i] >= mlim) { // ends in green
					begReColor(lLineColor,llim);
					endReColor(lineColor,mlim);
					toggleClass("Green");
				}

			}

			c.lineTo(getXPixel(i), getYPixel(yes[i]));					
			c.stroke();
		}
		
		
		
		
		// Draw the dots
		for(var i = 0; i < yes.length; i ++) {  
			dotSize = 5;
			c.beginPath();
			if (yes[i]>=mlim) c.fillStyle = lineColor;
			if ((yes[i]<mlim) && (yes[i]>=llim)) c.fillStyle = mLineColor;
			if (yes[i]<llim)  c.fillStyle =  lLineColor;
			if (i>=yes.length-1) {
			
				c.beginPath();
				dotSize = 11;
				c.fillStyle =  'white';
				c.arc(getXPixel(i), getYPixel(yes[i]), dotSize, 0, Math.PI * 2, true);
				c.fill();		
								
				c.beginPath();
				c.fillStyle =  mLineColor;
				dotSize = 10;
				c.fill();		
			}
			c.arc(getXPixel(i), getYPixel(yes[i]), dotSize, 0, Math.PI * 2, true);
			c.fill();		
			if(getXPixel(l-1)<(canvas.width-$("#percWindow").width()-70)) {
				$("#percWindow").css("top",Math.min(Math.max(getYPixel(yes[i]) - $("#percWindow").height()/2,$("#percWindow").height()/3),canvas.height - 350));
				$("#percWindow").css("left",Math.min(canvas.width -70 - $("#percWindow").width(),getXPixel(l-1)+20));
			} else {
				$("#percWindow").css("top",Math.min(getYPixel(yes[i])+61,canvas.height-170));
				$("#percWindow").css("left",Math.min(canvas.width -70 - $("#percWindow").width(),getXPixel(l-1)));
			}
			$("#timeDisp").css("left",(parseInt($("#percWindow").css("left"))+55)+"px");		
			$("#timeDisp").css("top", (parseInt($("#percWindow").css("top"))+130)+"px");		

		}
		
			/*
			// Number the dot at the end
			c.fillStyle = "black";
			c.font = 'italic 20pt sans-serif';
			c.fillText(Math.round(yes[yes.length-1]+cutOff)+"%",getXPixel(yes.length-1)+30,getYPixel(yes[yes.length-1])-35);
			*/
		
		/*
		// Draw the X value texts
		c.strokeStyle = '#DDDDDD'; // color of the rainlines
		c.font = 'italic 8pt sans-serif';
		c.lineWidth = 0.5;
		for(var i = 0; i < breakTX.length; i ++) {
			c.moveTo(breakTX[i], breakTY[i]+6);
			//c.lineTo(breakTX[i], graph.height - 32); // This would have drawn the exact lines with the hour breaks
			c.stroke();
			if (i == breakTX.length-1 || (breakTX[i+1]-breakTX[i]) > 28) {
				//c.fillText(fracToTime(breakTXL[i])+"¦", breakTX[i]+4, graph.height - yPadding + 20); // Text of hour breaks
			}
		}
		*/
		
		function drawTimes () {
		
			c.fillStyle = '#BFBFBF';
			c.font = '30pt MetaPlusLF';	
			for(h=0;h<labelTimes.length;h++) c.fillText(labelTimes[h], (xPadding+93)+pixelPerUnit*h, graph.height+46 - yPadding); // Text of hour breaks


		}
			
		drawTimes();	
		
	});
	//console.log("plot ready");
}

ts = new Array();
lab = new Array();
vals = new Array();

canvas = $('#graph');
document.getElementById("graph").width   = window.innerWidth-0;
document.getElementById("graph").height  = window.innerHeight-0;
canvas.width  = window.innerWidth-0;
canvas.height = window.innerHeight-0;
$("#theGraphs").width(canvas.width+"px");
$("#theGraphs").css("left",window.innerWidth/2 - $("#theGraphs").width()/2);
$("#theGraphs").css("top",window.innerHeight/2 - $("#theGraphs").height()/2);


cutOff = 60; // Von unten bis cutOff wird alles weggeschnitten

mlim = 85 - cutOff; // grenze zwischen gruen und gelb
llim = 80 - cutOff; // untere Grenze unter der es rot ist

lineColor = "#404040";
mLineColor = "#595959";
lLineColor = "#7F7F7F";
</script>
<?php
if (empty($_GET)) $stamp = strtotime("00:00:01");
else $stamp = $_GET['stamp'];
$stamp2 = $stamp + 86397;

$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
$query = "select * from availability_today where stamp > ".$stamp." AND stamp <= ".$stamp2;
$res = mysqli_query($mysqli,$query);

$stack = "";
$dbTimes = "";

while ($row = $res->fetch_assoc()) {
    $stack .= $row['Festo'].";";
    $dbTimes .= date("H:i:s",$row['stamp']).";";
}

?>
<script>
vals2 = "<?php echo $stack ?>";
times2 = "<?php echo $dbTimes ?>";
jsuStamp = "<?php echo $stamp ?>";

times = new Array();


times2b = times2.split(";");
vals = vals2.split(";");
vals.pop();
times2b.pop();
valsLine = new Array();
valsL = new Array();

for(w=0;w<vals.length;w++) {
	valsL[w] = vals[w];
	if (vals[w] < 80) {
		//valsL[w] = getBaseLog(1.0564,vals[w]);
		if(valsL[w]<1) valsL[w] = 1;
		valsL[w] = getBaseLog(1.244,valsL[w]);
		//console.log('l8');
	}
	
	vals[w] = parseFloat(vals[w])-cutOff;
	vals[w] = parseFloat(vals[w].toFixed(1));
	
	// Checken !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	if (valsL[w]>=cutOff) valsL[w] = parseFloat(valsL[w])-cutOff;
	
	valsL[w] = parseFloat(valsL[w].toFixed(1));

//	console.log('w:'+w+' vals:'+vals[w]+' valsL:'+valsL[w]);
	
	times[w] = getDayFrac(times2b[w]);
}
ts = times;




var xTimeString = "06:00;07:00;08:00;09:00;10:00;11:00;12:00;13:00;14:00;15:00;16:00;17:00;18:00;19:00;20:00;21:00;22:00;23:00;24:00";
var xPossArr = new Array();
xPossArr = xTimeString.split(";");


</script>
<script>
l=0;
theRel = 0;
theInt = 0;
var shallContinue = getUrlVars()["cont"];
//var jsStamp = getUrlVars()["stamp"];
jsStamp = jsuStamp;

var valsShow = new Array();

if (shallContinue) {
	valsShow = vals;
	l=vals.length-1
	//console.log(l);
	}
else {
	theInt = setInterval(rs,200);
}

initVal = 86;


var currentHour = 6;
var lastHour = 6;

//$("#timeDisp").css("left",  window.innerWidth/2-$("#timeDisp").width()/2); // gerade auskommentiert
numRuns = 0;
isUpdated = false;
blocked = false;
function rs(){


	if(l<=vals.length-1) {
		valsShow.push(vals[l]);
	    valsLine.push(valsL[l]);
    	l=l+1;
	}
	else  {
		clearInterval(theInt);
		theNew = setInterval(loadNew,900);
	}
	breakTX = new Array();
	breakTXL = new Array();
	breakTY = new Array();
//	plotLine(ts,lab,valsShow);
	plotLine(ts,lab,valsLine);
	if(!isNaN(parseInt(valsShow[l-1])+cutOff)) dival = parseInt(valsShow[l-1])+cutOff;
	if(!isNaN(parseInt(valsShow[l-1])+cutOff)) dival2 = parseFloat(valsShow[l-1])+cutOff;
	if(dival < 100) {
		fd = parseInt((valsShow[valsShow.length-1]+cutOff+'').substr(0,1));
		sd = parseInt((valsShow[valsShow.length-1]+cutOff+'').substr(1,1));
		thd = parseInt((valsShow[valsShow.length-1]+cutOff+'').substr(3,1));
		if(!(thd >= 0)) thd = 0;
		$("#firstDigit").attr("src","Ziffern/"+fd+".png");
		if(fd == 0) {
			$("#firstDigit").hide();
			$("#secondDigit").hide();
			$("#comma").hide();
		}
		else {
			$("#firstDigit").show();
			$("#secondDigit").show();
			$("#comma").show();
		}
		
		$("#secondDigit").attr("src","Ziffern/"+sd+".png");
		$("#thirdDigit").attr("src","Ziffern/"+thd+".png");
		
		if ((fd >= 8 && sd >= 5) || fd >=9 ) $("#timeDisp").css("background-color","transparent");
		else $("#timeDisp").css("background-color","transparent");
	
		//$("#percWindow").width("218");
	}else {
		$("#timeDisp").css("background-color","transparent");
	
		$("#firstDigit").attr("src","Ziffern/1.png");
		$("#secondDigit").attr("src","Ziffern/0.png");	
		$("#thirdDigit").attr("src","Ziffern/0.png");
		$("#thirdDigit").show();
		$("#comma").hide();
	
		//$("#percWindow").width("418");
	}

	timeString = fracToTime(ts[l-1]);
//		if (!(currentHour >=0)) $("#timeDisp").hide(0);
	if (timeString.length == 5) //after 10:00
	{
		$("#hour1").html(timeString.substr(0, 1));
		$("#hour2").html(timeString.substr(1, 1));
		$("#minute1").html(timeString.substr(3, 1));
		$("#minute2").html(timeString.substr(4, 1));
	}
	else {
		$("#hour1").html('0');
		$("#hour2").html(timeString.substr(0, 1));
		$("#minute1").html(timeString.substr(2, 1));
		$("#minute2").html(timeString.substr(3, 1));
	}

	
	$("#timeDisp").fadeIn(700);
	
	
   if (l > vals.length-2 && jsStamp == null) {
   		clearInterval(theInt);
   		theRel = setInterval("location.href='Liveticker.php?cont=1';",60000);
   	}
   	
   	//console.log("Execution number:"+numRuns++); // REMOVE THIS
}
</script>

<div id="div1" style="display:none">Loading...</div>

<script>
	function postProcess(){
		respuesta = $('#div1').text();
		a1 = respuesta.split("/");
		uV = a1[0];
		uT = a1[1];
		
		uValues = uV.split(";");
		uTimes = uT.split(";");
		
		uValues.pop();
		uTimes.pop();
		
		
		for(w=0;w<uValues.length;w++) {
			uValues [w] = parseFloat(uValues [w])-cutOff;
			uValues [w] = parseFloat(uValues [w].toFixed(1));
			uTimes[w] = getDayFrac(uTimes[w]);
		}

		
		if (ts.length != uTimes.length) {
			isUpdated = true;
			
			ts = uTimes;
			vals = uValues;
			
			rs();
		}
	}

	function loadNew() {
		$("#div1").load("deliverLiveVals.php?rand="+Math.random()+"&stamp="+jsStamp);
		setTimeout("postProcess()",200);

	}
/******/
var smallScreen = false;

/*
if(window.innerWidth < 1415 || window.innerHeight < 695) smallScreen = true;

if (smallScreen) {
	$('#percWindow').hide();
	$('body').html('<div id="nodisp"><div id="nodispi">Keine Anzeige möglich</div></div>');
	alert("Der Bildschirm oder das Explorerfenster ist zu klein!\n\nBitte verwenden Sie einen HD Bildschirm \nund maximieren Sie das Fenster");
}
*/

graph = canvas;
var c = graph[0].getContext('2d'); 

if (!(c.setLineDash) && !($.cookie("ie9warn") > 1)) {
	alert('Sie verwenden noch den IE9.\n\nDiese HTML-5 fähige Rich Internet Application benötigt eigentlich mindestens den Internet Explorer 11\n(Erscheinungsdatum 17. Oktober 2013)\n\nSie können das System trotzdem verwenden, aber alle gestrichelten Linien erscheinen bei Ihnen durchgezogen');
	$.cookie("ie9warn", 10, { expires : 20});
} 

</script>

</body>

</html>
