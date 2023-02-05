<head>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="/Overall.css?new7">
<link rel="stylesheet" type="text/css" href="/Buttons.css?new1">

<!-- Preload important js libraries for applacations that load later (pre-cache) -->
<script src="jquery-2.1.1.js"></script>
<script src="jquery.cookie.js"></script>

<?php //include 'identify.php' ?>

<link rel="shortcut icon" href="/Final2.ico" type="image/x-icon">
<link rel="icon" href="/Final2.ico" type="image/x-icon">


<title>S T A T ISTIK</title>
<style type="text/css">
.auto-style1 {
	font-family: MetaPlusLF;
	color: #1B17C0;
	font-size:30pt;
}
.auto-style2 {
	font-family: MetaPlusLF;
}
body {
	margin-left: 30px;
	font-family: MetaPlusLF;
	
background: rgb(180,221,180); /* Old browsers */

background: -moz-linear-gradient(top, rgba(180,221,180,1) 0%, rgba(131,199,131,1) 17%, rgba(82,177,82,1) 33%, rgba(0,138,0,1) 67%, rgba(0,87,0,1) 83%, rgba(0,36,0,1) 100%); /* FF3.6-15 */

background: -webkit-linear-gradient(top, rgba(180,221,180,1) 0%,rgba(131,199,131,1) 17%,rgba(82,177,82,1) 33%,rgba(0,138,0,1) 67%,rgba(0,87,0,1) 83%,rgba(0,36,0,1) 100%); /* Chrome10-25,Safari5.1-6 */

background: linear-gradient(to bottom, rgba(180,221,180,1) 0%,rgba(131,199,131,1) 17%,rgba(82,177,82,1) 33%,rgba(0,138,0,1) 67%,rgba(0,87,0,1) 83%,rgba(0,36,0,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4ddb4', endColorstr='#002400',GradientType=0 ); /* IE6-9 */                
}
#logoDiv {
	background-image: url('Logo.png');
	height: 800px;
	width: 700px;
	position: absolute;
	top: 110px;
	left: 300px;
	background-repeat: no-repeat;
	opacity: 0.1;
	visibility: hidden;
}
.boton{
font-size:16pt;
height:50px;
color:darkblue;
border-radius:8px;
padding-left:15px;
padding-right:15px;

background: #b4e391;
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2I0ZTM5MSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzYxYzQxOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNiNGUzOTEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #b4e391 0%, #61c419 50%, #b4e391 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b4e391), color-stop(50%,#61c419), color-stop(100%,#b4e391));
background: -webkit-linear-gradient(top,  #b4e391 0%,#61c419 50%,#b4e391 100%);
background: -o-linear-gradient(top,  #b4e391 0%,#61c419 50%,#b4e391 100%);
background: -ms-linear-gradient(top,  #b4e391 0%,#61c419 50%,#b4e391 100%);
background: linear-gradient(to bottom,  #b4e391 0%,#61c419 50%,#b4e391 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4e391', endColorstr='#b4e391',GradientType=0 );

}


.inset { text-shadow:#fff 0px 1px 0, #000 0 -1px 0, rgba(0,0,0,0.8) 0 30px 25px;}
#topright {
	position: absolute;
	top: 95px;
	right: 5px;
	z-index:5;
}

.boton2 {

font-size:13pt;
height:40px;
color:darkblue;
border-radius:8px;
padding-left:15px;
padding-right:15px;
border-color:lightblue;

	background: #feffff; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZlZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjM1JSIgc3RvcC1jb2xvcj0iI2RkZjFmOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNhMGQ4ZWYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #feffff 0%, #ddf1f9 35%, #a0d8ef 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#feffff), color-stop(35%,#ddf1f9), color-stop(100%,#a0d8ef)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #feffff 0%,#ddf1f9 35%,#a0d8ef 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #feffff 0%,#ddf1f9 35%,#a0d8ef 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #feffff 0%,#ddf1f9 35%,#a0d8ef 100%); /* IE10+ */
background: linear-gradient(to bottom,  #feffff 0%,#ddf1f9 35%,#a0d8ef 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#a0d8ef',GradientType=0 ); /* IE6-8 */

}

.additional {
font-size:16pt;
height:50px;
color:darkblue;
border-radius:8px;
padding-left:15px;
padding-right:15px;

}

#theCont {
	background: rgba(54, 25, 25, .027);
	padding:30px;
	padding-bottom:25px;
	border-radius:20px;
    display:inline-block;
      -o-transition:2s;
  -ms-transition:2s;
  -moz-transition:2s;
  -webkit-transition:2s;

}
#theCont:hover { 
	background: rgba(133, 133, 133, .2);

}
  .auto-style4 {
	  font-size: small;
  }
  
a:visited {
	color:aqua;
}

</style>

</head>




<h1 class="auto-style1 inset">Anwendungen zur Kennzahlenanalyse und 
statistischen Auswertung</h1>
<div id="topleft">
<p>&nbsp;</p>

<font color="gray" style="font-size:65%">
Statistik zu langsam? - Technische Spezifikationen vom SDET2125 Server:<br>
Betriebsystemname:	Microsoft Windows Server 2012 R2 Datacenter<br>
Systemmodell:	VMware Virtual Platform<br>
Systemtyp:	x64-basierter PC<br>
Prozessor:	Intel(R) Xeon(R) CPU E5-2650 v2 @ 2.60GHz, 2600 MHz, 2 Kern(e), 2 logische(r) Prozessor(en)<br>
Gesamter realer Speicher:	8,00 GB<br>
<br></font><br>

<div style="width:100%;"><div style="float:left; width:25%; display:none;"><br>
	Hinweis: Sie können das Favoritenicon (favicon) <img src="Final2.ico" width="5%"> 
	oben <br>
	in der Adressleiste wo die Internetadresse steht mit der Maus<br>
	=&gt; An das Startmenü <br>
	=&gt; Auf dem Desktop <br>
	=&gt; Auf der Taskleiste<br>
	anheften (per Drag &amp; Drop)<br>
	Das hat außerdem die Nebenwirkung, dass sich das Aussehen<br>
	und die Farben der IE-Buttons ändern.
<div style="position:absolute;top:70px;left:10px;"><img src="img/Arrow.png"></div>
</div><div style="float:left; border-left:2px;"><span class="auto-style2">
<div id="theCont" style="padding:30px">
<div id="theCont">

	<input id="completa2" class="boton gradient hov" onclick="window.open('/Wochenuebersicht.php', '_blank');" type="button" value="Liveticker Erreichbarkeit"></font></span> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!-- <input id="completa2" class="boton gradient hov" onclick="window.open('/Wochenuebersicht_vs.php', '_blank');" type="button" value="Liveticker Erreichbarkeit Start2"></font></span> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
	<input title="Welche Tage waren besonders schwer, welche besonders gut? Wie lässt sich das Monatsergebnis erklären?" id="completa2" class="bBig bOrange gradient additional hov" onclick="window.open('/TopsFlops.php', '_blank');" type="button" value="Monatsverteilung">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			&nbsp; 
	
	<input id="completa2" class="boton2 gradient hov" style="font-size:16pt;height:50px;" onclick="window.open('/Wochenuebersicht_En.php', '_blank');" type="button" value="Accurate View">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input title="Wie stark muss der FGSD LT in diesem Moment arbeiten?" id="completa2" class="bSmall bPink gradient hov" onclick="window.open('http://sdet2125/callwelle.php', '', 'fullscreen=yes')" type="button" value="Callwellenindikator">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input id="completa2" class="boton2 gradient hov" onclick="location.href='/Enzyklo.php'" type="button" value="Enzyklopädie">
	<br><br><br><br>
			
	<input id="completa3" class="boton gradient hov" onclick="window.open('http://sdet2125/arcsPage_X.php', '', 'fullscreen=yes, scrollbars=auto');" type="button" value="Bogendiagramm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input title="Der aktuelle Stand der Errreichbarkeit diesen Monat. Graphisch dargestellt und visuell viel begreifbarer" id="completa4" class="bPink bBig gradient hov" style="font-size:16pt;height:50px;" onclick="window.open('http://sdet2125/gauge_cd.php', '', 'fullscreen=yes, scrollbars=no');" type="button" value="Monatswaage 3 - Current Monthly Status">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	<input title="Erreichbarkeit in einer 'echteren' Waage" id="completa4" class="bBlack gradient hov" onclick="window.open('/monatswaage.php', '', 'fullscreen=yes, scrollbars=auto,width=1920,height=1080');" type="button" value="Monatswaage">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input id="completa2" class="boton2 gradient hov" onclick="window.open('\\\\cde62560\\c$\\TEMP\\Statistik\\DASHBOARD\\DASHBOARD.jpg')" type="button" value="Dashboard (TOK)">
	<b><br><br><font size="5"><font color="red">schließen mit ALT_F4 oder 'X' </font> 
	</font> </b>


</div>
</div>
		<font size="5">
	<input id="completa2" class="boton2 gradient hov" onclick="$('html, body').animate({scrollTop: 1000 }, 3000);" type="button" value="Neue Kommentare">
<font size="5">
<br><br>
<div id="demo" style="position:absolute; top:430;right:30"></div>
		</div></div>
</div>



<div id="topright" style="display:none"><img src="/img/mse.jpg"></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br>
	<textarea cols="80" id="upd" name="TextArea1" rows="9">Updates
	&#10=> Neue Kommentare unten in grün hier auf der Seite
	&#10=> Umstellung auf neue Werte am 16. März 2016
	&#10=> Der Callwellenindikator hat jetzt eine Stufenangabe wie stark die Callwelle momentan is
	&#10=> Alle Vollbildanzeigen haben jetzt ein 'X' zum schließen
	&#10=> Die Monatswaage - CD hat neue Bildelemente und eine erweiterte Skala.
	&#10=> Die monatliche Rankingliste beinhaltet nun auch den letzten Monatstag. Außerdem kann man nun weiter zurück blättern.
	&#10=> Es gibt einen Button 'Callwellenindikator' der simuliert ob und wie schnell die Anrufe momentan ankommen
	</textarea><img src="/HTML5_logo.png" width="7%" style="margin-left:150px">
	<input id="completa2" class="bSmall bPink gradient hov" style="opacity:0.3" onclick="window.location='/img/Favorites.png'" type="button" value="RIA Hinweis">
<hr><font size="5">
<p style="margin: 0.5em 0px; line-height: 21.2800006866455px; color: rgb(37, 37, 37); font-family: sans-serif; font-size: 16pt; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
Copyright (c) &lt;2014&gt; &lt;MIT License, Massachusetts Institute of Technology&gt;<br></p>
<p style="margin: 0.5em 0px; line-height: 21.2800006866455px; color: rgb(37, 37, 37); font-family: sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px;">
<br><span class="auto-style3">Permission is hereby granted, free of charge, to 
any person obtaining a copy of this software and associated documentation files 
(the "Software"), to deal in the Software without restriction, including without 
limitation the rights to use, copy, modify, merge, publish, distribute, 
sublicense, and/or sell copies of the Software, and to permit persons to whom 
the Software is furnished to do so, subject to the following conditions:<br><br>
The above copyright notice and this permission notice shall be included in all 
copies or substantial portions of the Software.<br><br>THE SOFTWARE IS PROVIDED 
"AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT 
LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE 
AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE 
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE 
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</span></p><hr>
<font color="white">
Diese Software ist ein Beispiel einer <b>Rich Internet Application:</b><br><br>

=&gt; Das Internet hat begonnen mit verlinktem Text, namentlich Hyperlinks. Daher 
der Name HTML für die Webseiten-Programmiersprache<br>
=&gt; Von Html 1.0 mit einfachen Links über Bilder, Buttons und immer mehr 
Interaktivität sind wir seit Ende 2014 bei der Version HTML-5<br>
=&gt; HTML-5 ist eine vollwertige Programmierumgebung. Alle Module siehe <a href="https://en.wikipedia.org/wiki/HTML5#/media/File:HTML5_APIs_and_related_technologies_taxonomy_and_status.svg">
Wikipedia</a><br>
=&gt; Eine mit HTML-5 entwickelte Software ist eine Anwendung die zu einem echten 
Windows Programm inzwischen nahezu gleichwertig ist <br>
=&gt; Soweit hat sich das Internet nun entwickelt, dass man über eine 
Internetadresse keine Seite sondern eine vollwertige Anwendung abrufen kann<br>
=&gt; Der Vorteil liegt darin, dass diese Anwendung von überall auf der Welt in 
einem modernen Browser (IE, Chrome, Firefox, etc) abrufbar ist, egal wo man sich 
befindet. Global, ob in Indien, Japan, Litauen oder in Deutschland.<br>=&gt; HTML-5 
ist ein offizieller Standard des World Wide Web Consortiums. Dieses Consortium 
hat Büros in den Haupstädten der Welt. <br>=&gt; Der Standard ist hochoffiziell und 
wird sowohl im Android als auch im Apple iOS sowie im Windows Browser identisch 
unterstützt. Es handelt sich also um einen systemübergreifenden, kompatiblen, 
verbreiteten Standard.<br>
=&gt; Eine HTML-5 Anwendung benötigt 
keinerlei Zusatzinstallation, kein Java, keine Plugins, keine 
Installationspakte, keine CD, kein Software Center.<br>

<font color="lime"><a name="gohere"></a>
Weiterhin ist HTML-5 eine sehr moderne Sprache, in der Funktionen wie Standortbasierte GPS Geolocation
Sowie 2D und sogar dreidimensionale Möglichkeiten bereits in den Bibliotheken mit enthalten sind, und nur
noch durch Funktionsaufruf angesteuert werden müssen.<br>
Um in einer älteren Programmiersprache z.B. GPS zu nützen, müsste ein Experte die Funktionalität erst von 0 auf neu Entwickeln<br>
<br>
Nennenswerte Module sind
<br>=&gt; <a href="https://jayweeks.com/medusae/">HTML-5 Qualle</a>
<br>=&gt; Skalierbare Vektorgraphiken, die man unendlich skalieren / vergrößern kann ohne Verpixelung
<br>=&gt; Animationseffekte: Vergrösserungen, Transfomrationen, Verkleinerungen, Rotation, Transparenz, Überlagerung für alle Grafikelemente.
<br>=&gt; Web Storage - Datenbanken direkt im Browser - um eine Offlineanwendung zu programmieren, die trotzdem auf Webtechnologien basiert.
<br>=&gt; Drag & Drop um Bildschirmelemente direkt mit der Maus zu manipulieren, hochzuladen, zu bewegen.
<br>=&gt; MathML um mathematische Formeln in Symbolsprache darzustellen
<br>=&gt; Native Audio und Videounterstützung im Browser um ohne Mediaplayer z.B. Kinofilme direkt im Browser anzuschauen. Siehe: <a href="http://www.netflix.de">Netflix</a>
<br>=&gt; Geolocation um z.B. den Standort von Gütern und Produkten in Echtzeit auf dem Globus nachzuverfolgen <a href="http://www.track-trace.com/">Track and Trace</a>
<br>=&gt; Html - 5 hat rund 30 Module. Es könnten weitere Module in HTML - 6 folgen.
<br>=&gt; Weitere aktuelle Beispiele von Offlineanwendungen die es jetzt im Netz gibt ist das <a href="https://office.live.com/start/Word.aspx">Office Live von Mirosoft</a> inkl. <a href="https://webmail.emea.festo.com">Outlook Web Access</a>

<script type="text/javascript">
    function maxWin() {
    if( window.innerHeight < screen.height-30) {
	    //document.getElementById("completa2").msRequestFullscreen();
        var wscript = new ActiveXObject("Wscript.shell");
        wscript.SendKeys("{F11}");
    }    // browser is fullscreen
}

</script>
<script>
navigator.geolocation.getCurrentPosition(showPosition, {enableHighAccuracy: true});
function showPosition(position) {
	lat = position.coords.latitude;
	lng = position.coords.longitude; 
	
	if (lng > 19 && lng < 28) q = 'Ich Netzwerk läuft über Kaunas. Breitengrad: '+lng;
	if (lng > 6 && lng < 12) q = 'Sie befinden sich in Scharnhausen. Breitengrad: '+lng;
	    
	 //$('#demo').html(q);


    var latlon = position.coords.latitude + "," + position.coords.longitude;

    var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=250x250&sensor=false";

    $('#demo').html("<font size=2pt>Das Netzwerk positioniert Sie hier: <br><img src='"+img_url+"'><br>Über Handy würde GPS verwendet werden<br>Über WLAN möglicherweise andere Position<br>Mehrfaches Laden verbessert Position</font>");


 }
 



 </script>



</body>

</font></font></font></font></font>
<p>&nbsp;</p>


</html>
