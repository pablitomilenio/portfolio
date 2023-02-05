<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://www.zamza.cl/contabilidad/Leistungsindex/ -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type">
<script src="jquery-2.1.1.js"></script>
<title>Erreichbarkeitsindex</title>
<style type="text/css">
<!--
body {
	background-color: black;
	margin: 0;
	width: 100%;
	height: 110%;
	padding: 0;
	overflow: hidden;
}
#graph {
}
#theGraphs {
	background-color: transparent;
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	/* opacity:0.4; */
}
.bgGreen {
	background: #d2ff52;
/* Old browsers */background: -moz-linear-gradient(top, #d2ff52 0%, #91e842 100%); /* FF3.6+ */;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d2ff52), color-stop(100%,#91e842)); /* Chrome,Safari4+ */;
	background: -webkit-linear-gradient(top, #d2ff52 0%,#91e842 100%); /* Chrome10+,Safari5.1+ */;
	background: -o-linear-gradient(top, #d2ff52 0%,#91e842 100%); /* Opera 11.10+ */;
	background: -ms-linear-gradient(top, #d2ff52 0%,#91e842 100%); /* IE10+ */;
	background: linear-gradient(to bottom, #d2ff52 0%,#91e842 100%); /* W3C */;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842',GradientType=0 ); /* IE6-9 */
}
.bgYellow {
	background: #ffd65e;
/* Old browsers */background: -moz-linear-gradient(top, #ffd65e 0%, #febf04 100%); /* FF3.6+ */;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffd65e), color-stop(100%,#febf04)); /* Chrome,Safari4+ */;
	background: -webkit-linear-gradient(top, #ffd65e 0%,#febf04 100%); /* Chrome10+,Safari5.1+ */;
	background: -o-linear-gradient(top, #ffd65e 0%,#febf04 100%); /* Opera 11.10+ */;
	background: -ms-linear-gradient(top, #ffd65e 0%,#febf04 100%); /* IE10+ */;
	background: linear-gradient(to bottom, #ffd65e 0%,#febf04 100%); /* W3C */;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffd65e', endColorstr='#febf04',GradientType=0 ); /* IE6-9 */
}
.bgRed {
	background: #a90329;
/* Old browsers */ /* IE9 SVG, needs conditional override of 'filter' to 'none' */background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2E5MDMyOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQ0JSIgc3RvcC1jb2xvcj0iIzhmMDIyMiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM2ZDAwMTkiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top, #a90329 0%, #8f0222 44%, #6d0019 100%); /* FF3.6+ */;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a90329), color-stop(44%,#8f0222), color-stop(100%,#6d0019)); /* Chrome,Safari4+ */;
	background: -webkit-linear-gradient(top, #a90329 0%,#8f0222 44%,#6d0019 100%); /* Chrome10+,Safari5.1+ */;
	background: -o-linear-gradient(top, #a90329 0%,#8f0222 44%,#6d0019 100%); /* Opera 11.10+ */;
	background: -ms-linear-gradient(top, #a90329 0%,#8f0222 44%,#6d0019 100%); /* IE10+ */;
	background: linear-gradient(to bottom, #a90329 0%,#8f0222 44%,#6d0019 100%); /* W3C */;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a90329', endColorstr='#6d0019',GradientType=0 ); /* IE6-8 */
}
-->
</style>
</head>

<body class="bgRed">

<div id="eingabe" style="left:0px; top : 112px; height: 108px; width: 218px; position:absolute;">
<img id="firstDigit" src="Ziffern/5.png"> <img id="secondDigit" src="Ziffern/4.png"> <img src="Ziffern/perc.png">
</div>
<div id="timeDisp" style="left:0px; top : 112px; height: 108px; width: 324px; position:absolute; display:none">
<img id="hour1" src="Ziffern/1.png"> <img id="hour2" src="Ziffern/0.png"> 
<img id="minute1" src="Ziffern/colon.png">
<img id="minute1" src="Ziffern/0.png"> <img id="minute2" src="Ziffern/0.png"> 
</div>

<div id="theGraphs" align="center">
	<canvas id="graph" height="100%" width="100%">
	<div align="left">
	IhrInternet-Browseristzualt!<br>SieverwendenzurZeit:<br><br><font face="arial">"Mozilla/5.0(WindowsNT6.1;WOW64)AppleWebKit/537.36(KHTML,likeGecko)Chrome/38.0.2125.101Safari/537.36OPR/25.0.1614.50"</font><br><br>HierkönnenSieIhrenBrowsernachWahlaktualisieren<br><br><a href="http://windows.microsoft.com/en-US/internet-explorer/downloads/ie-9/worldwide-languages">=&gt;InternetExplorer</a><br><a href="http://www.google.com/chrome/intl/de/landing_win.html?hl=de&amp;hl=de">=&gt;Chrome</a><br><a href="http://www.mozilla.org/en-US/firefox/all.html">=&gt;Firefox</a><br><br>DurchdieAktualisierungwirdIhrInterneterlebnisharwarebeschleunigtundkompatibler</canvas></div>
</canvas>
</div>
<script>
function numGen(min, max) {
	var num = Math.random() * (max - min) + min;
	return Math.floor(num*100)/100;
}
</script>
<script>
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
	$("body").removeClass();
	$("body").removeClass(1600).toggleClass("bg"+name, 1600);
}

dipos = 0;
dival = 0;

function plotLine(unix,buTag,betr) {// Unix sind die Unix-Timestamps
	// unix: Timestamps
	// buTag: labesls
	// betr: y values
	var graph;
	var xPadding = 30;
	var yPadding = 30;
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
	
	// Return the x pixel for a graph point
   /* function getXPixel(val) {
		return ((graph.width - xPadding) / data.values.length) * val + (xPadding * 1.5);
	}*/
	
	function getXPixel(val) {
		//           
		//alert(graph.width);
	 //alert(getMaxX()); //22
		//xesBeta.sort();
		maxX = xesBeta[xes.length-1];
		minX = xesBeta[0];
		spanData = maxX-minX;
		spanScreen = (graph.width-xPadding*3);
		//alert("spanData:"+spanData+" spanScreen:"+spanScreen+" minX:"+minX+" maxX:"+maxX);
		//return xPadding+10+data.values[val].X/minX*50;
		myResult = spanScreen-((maxX-xes[val])*(spanScreen/spanData)-xPadding*2);
		if (myResult < 1) alert("spanData:"+spanData+" spanScreen:"+spanScreen+" minX:"+minX+" maxX:"+maxX);
		return myResult

		//return 30;
		//return graph.width - (((graph.width - xPadding) / getMaxX()) * val) - xPadding;
	}
	
	// Return the y pixel for a graph point
	function getYPixel(val) {
		return graph.height - (((graph.height - yPadding) / getMaxY()) * val) - yPadding;
	}

	$(document).ready(function() {
		graph = canvas;
		var c = graph[0].getContext('2d'); 
		
		//clearing the Canvas
		c.clearRect(0,0,canvas.width,canvas.height);
				
		c.lineWidth = 2;
		c.strokeStyle = '#333';
		c.font = 'italic 8pt sans-serif';
		c.textAlign = "center";
				
		// Draw the axisesp
		
		c.beginPath();
		c.moveTo(xPadding, 0);
		c.lineTo(xPadding, graph.height - yPadding);
		c.lineTo(graph.width, graph.height - yPadding);
		c.stroke();
		
	   
		// Draw the Y value texts
		c.textAlign = "right"
		c.textBaseline = "middle";
		
		for(var i = 0; i < getMaxY(); i += 10) {
			// Y ACHSE
			c.fillText(i+cutOff, xPadding - 10, getYPixel(i));
		}
		
		//c.strokeStyle = '#00f';
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
	
		c.lineWidth = 30;
		for(var i = 1; i < yes.length; i ++) {
			c.beginPath();
			c.moveTo(getXPixel(i-1), getYPixel(yes[i-1]));

			if (yes[i-1] >= mlim) { //starts green
				if(yes[i] >= mlim) { // end also green
					c.strokeStyle =  lineColor;
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
			dotSize = 15;
			c.beginPath();
			if (yes[i]>=mlim) c.fillStyle = lineColor;
			if ((yes[i]<mlim) && (yes[i]>=llim)) c.fillStyle = mLineColor;
			if (yes[i]<llim)  c.fillStyle =  lLineColor;
			if (i==yes.length-1) {
				c.fillStyle =  "black";
				dotSize = 30;
			}
			c.arc(getXPixel(i), getYPixel(yes[i]), dotSize, 0, Math.PI * 2, true);
			$("#eingabe").css("top",Math.min(getYPixel(yes[i])+61,screen.height-170));
			$("#eingabe").css("left",Math.min(screen.width - 222,getXPixel(l-1)-40));			
			c.fill();
		}
		
			/*
			// Number the dot at the end
			c.fillStyle = "black";
			c.font = 'italic 20pt sans-serif';
			c.fillText(Math.round(yes[yes.length-1]+cutOff)+"%",getXPixel(yes.length-1)+30,getYPixel(yes[yes.length-1])-35);
			*/
		
		
		// Draw the X value texts
		c.strokeStyle = '#DDDDDD'; // color of the rainlines
		c.font = 'italic 8pt sans-serif';
		c.lineWidth = 0.5;
		for(var i = 0; i < breakTX.length; i ++) {
			c.moveTo(breakTX[i], breakTY[i]+6);
			c.lineTo(breakTX[i], graph.height - 32);
			c.stroke();
			if (i == breakTX.length-1 || (breakTX[i+1]-breakTX[i]) > 28) {
				c.fillText(fracToTime(breakTXL[i])+"¦", breakTX[i]+4, graph.height - yPadding + 20);
			}
		}
				
		
	});
	console.log("plot ready");
}

ts = new Array();
lab = new Array();
vals = new Array();

canvas = $('#graph');
document.getElementById("graph").width   = window.innerWidth-30;
document.getElementById("graph").height  = window.innerHeight-0;
canvas.width  = window.innerWidth-30;
canvas.height = window.innerHeight-30;

cutOff = 65; // Von unten bis cutOff wird alles weggeschnitten

mlim = 85 - cutOff; // grenze zwischen gruen und gelb
llim = 80 - cutOff; // untere Grenze unter der es rot ist

lineColor = "green";
mLineColor = "yellow";
lLineColor = "#FC8787";
</script>
<?php

$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
$res = mysqli_query($mysqli, "select * from availability_today");

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
times = new Array();


times2b = times2.split(";");
vals = vals2.split(";");
vals.pop();
times2b.pop();
for(w=0;w<vals.length;w++) {
	vals[w] = parseFloat(vals[w])-cutOff;
	vals[w] = parseFloat(vals[w].toFixed(1));
	times[w] = getDayFrac(times2b[w]);
}
ts = times;
</script>
<script>
l=0;
var shallContinue = getUrlVars()["cont"];

if (shallContinue) {
	valsShow = vals;
	l=vals.length-1
	console.log(l);
	}
else {
	theInt = setInterval("rs();",200);
	valsShow = new Array();
}

initVal = 86;


currentHour = 6;
lastHour = 6;

$("#timeDisp").css("left",screen.width/2-324/2);
$("#timeDisp").css("top",screen.height/2-108/2);

function rs(){
	valsShow.push(vals[l++]);
	breakTX = new Array();
	breakTXL = new Array();
	breakTY = new Array();
	plotLine(ts,lab,valsShow);
	if(l>vals.length) clearInterval("theInt");
	if(!isNaN(parseInt(valsShow[l-1])+cutOff)) dival = parseInt(valsShow[l-1])+cutOff;
	fd = Math.floor(dival / 10);
	sd = Math.floor(dival - fd*10);
	$("#firstDigit").attr("src","Ziffern/"+fd+".png");
	$("#secondDigit").attr("src","Ziffern/"+sd+".png");
	
	currentHour = fracToTime(ts[l]).substr(0, 1);
	if (currentHour == 1) { // double digit
		currentHour = fracToTime(ts[l]).substr(0, 2);
		$("#hour1").attr("src","Ziffern/"+currentHour.substr(0, 1)+".png");
		$("#hour2").attr("src","Ziffern/"+currentHour.substr(1, 1)+".png");
	} else {
		$("#hour1").attr("src","Ziffern/0.png");
		$("#hour2").attr("src","Ziffern/"+currentHour.substr(0, 1)+".png");
	}

	if(currentHour != lastHour) {
		lastHour = currentHour;
		$("#timeDisp").fadeIn("fast");
		$("#timeDisp").fadeOut("slow");
	}
	
	
   if (l > vals.length-2) {
   		clearInterval(theInt);
   		//theRel = setInterval("location.href='ShowFullDay.php?cont=1';",2000);
   	}
}

rs();
</script>

</body>

</html>
