<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://www.zamza.cl/contabilidad/Leistungsindex/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script src="jquery-2.1.1.js"></script>

<title>Leistungsindex</title>
<style type="text/css">
<!--
body {
	background-color: #66FFCC;
}
#graph {
	
}
#theGraphs{
	background-color:transparent;
	/* opacity:0.4; */
}


.bgGreen {
background: #d2ff52; /* Old browsers */
background: -moz-linear-gradient(top, #d2ff52 0%, #91e842 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d2ff52), color-stop(100%,#91e842)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #d2ff52 0%,#91e842 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #d2ff52 0%,#91e842 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #d2ff52 0%,#91e842 100%); /* IE10+ */
background: linear-gradient(to bottom, #d2ff52 0%,#91e842 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842',GradientType=0 ); /* IE6-9 */
}
.bgYellow {
background: #ffd65e; /* Old browsers */
background: -moz-linear-gradient(top, #ffd65e 0%, #febf04 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffd65e), color-stop(100%,#febf04)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #ffd65e 0%,#febf04 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #ffd65e 0%,#febf04 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #ffd65e 0%,#febf04 100%); /* IE10+ */
background: linear-gradient(to bottom, #ffd65e 0%,#febf04 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffd65e', endColorstr='#febf04',GradientType=0 ); /* IE6-9 */
}
.bgRed {
background: #febbbb; /* Old browsers */
background: -moz-linear-gradient(top, #febbbb 0%, #fe9090 45%, #ff5c5c 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#febbbb), color-stop(45%,#fe9090), color-stop(100%,#ff5c5c)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #febbbb 0%,#fe9090 45%,#ff5c5c 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #febbbb 0%,#fe9090 45%,#ff5c5c 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #febbbb 0%,#fe9090 45%,#ff5c5c 100%); /* IE10+ */
background: linear-gradient(to bottom, #febbbb 0%,#fe9090 45%,#ff5c5c 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#febbbb', endColorstr='#ff5c5c',GradientType=0 ); /* IE6-9 */
}


-->
</style></head>

<body class="bgRed">

<div align="center" id="theGraphs">
    <canvas id="graph" width="1336" height="601">
          <div align="left">
          Ihr Internet-Browser ist zu alt !<br>
          Sie verwenden zur Zeit: <br><br><font face="arial">"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.101 Safari/537.36 OPR/25.0.1614.50"</font><br><br>
          Hier können Sie Ihren Browser nach Wahl aktualisieren <br><br>
          <a href="http://windows.microsoft.com/en-US/internet-explorer/downloads/ie-9/worldwide-languages">=&gt; Internet Explorer</a><br>
          <a href="http://www.google.com/chrome/intl/de/landing_win.html?hl=de&hl=de">=&gt; Chrome</a><br>
          <a href="http://www.mozilla.org/en-US/firefox/all.html">=&gt; Firefox</a><br><br>
          Durch die Aktualisierung wird Ihr Interneterlebnis harwarebeschleunigt und kompatibler
          </div>
  </canvas>
</div>

<script>
function numGen(min, max) {
	var num = Math.random() * (max - min) + min;
	return Math.floor(num*100)/100;
}
</script>

<script>
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
	
		c.lineWidth = 12;
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
			dotSize = 6;
			c.beginPath();
			if (yes[i]>=mlim) c.fillStyle = lineColor;
			if ((yes[i]<mlim) && (yes[i]>=llim)) c.fillStyle = mLineColor;
			if (yes[i]<llim)  c.fillStyle =  lLineColor;
			if (i==yes.length-1) {
				c.fillStyle =  "black";
				dotSize = 10;
			}
			c.arc(getXPixel(i), getYPixel(yes[i]), dotSize, 0, Math.PI * 2, true);
			c.fill();
		}
		
			// Number the dot at the end
			c.fillStyle = "black";
			c.font = 'italic 20pt sans-serif';
			c.fillText(Math.round(yes[yes.length-1]+cutOff)+"%",getXPixel(yes.length-1)+30,getYPixel(yes[yes.length-1])-35);
		
		
		
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
}

ts = new Array();
lab = new Array();
vals = new Array();

canvas = $('#graph');
document.getElementById("graph").width   = window.innerWidth-30;
document.getElementById("graph").height  = window.innerHeight-30;
canvas.width  = window.innerWidth-30;
canvas.height = window.innerHeight-30;

cutOff = 65; // Von unten bis cutOff wird alles weggeschnitten

mlim = 85 - cutOff; // grenze zwischen gruen und gelb
llim = 80 - cutOff; // untere Grenze unter der es rot ist


lineColor = "green";
mLineColor = "yellow";
lLineColor = "red";


q=0;
theInt = setInterval("rs()",400);
initVal = 86;

function rs(){
	lab.push(fracToTime((0.000685*q)+0.34));
	ts.push((0.000685*q)+0.34);
	resFracs = ts;
	diff100 = (105-initVal)/30;
	diffCO = (initVal-60)/30;
	initVal = initVal*numGen(95+diff100,105-diffCO)/100;	

	vals.push(initVal-cutOff);
	breakTX = new Array();
	breakTXL = new Array();
	breakTY = new Array();
	plotLine(ts,lab,vals);
	if (q >= 300) clearInterval(theInt);
	q++;
}

</script>


</body></html>