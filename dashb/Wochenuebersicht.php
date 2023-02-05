<head>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="msapplication-navbutton-color" content="#660066" />
<link rel="shortcut icon" href="/Final2.ico" type="image/x-icon">
<link rel="icon" href="/Final2.ico" type="image/x-icon">
<title>(Ɛη) Tägliche Werte</title>


<script src="jquery-2.1.1.js"></script>
<script src="jquery.cookie.js"></script>

<style type="text/css">
body {
	font-family: MetaPlusLF;
	font-size:14pt;
	
	

  background: -webkit-linear-gradient(90deg, #8e9eab 10%, #eef2f3 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #8e9eab 10%, #eef2f3 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #8e9eab 10%, #eef2f3 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #8e9eab 10%, #eef2f3 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #8e9eab 10%, #eef2f3 90%); /* W3C */
                
}
h1{
	font-size:40px;

}
b {
	font-weight:600;
}
#Days{
	font-weight:bold;
	font-size:32px;
}
.cw{
	font-weight:bold;
	font-size:32px;
}
a:link {
	text-decoration:none;
	font-size:25px;
}
a:hover{
	/*text-decoration:underline;*/
	background-color:aqua;
}
td {
	padding:5px;	
	padding-top:3px;
	padding-bottom:3px;
}
.ar { 
	background-color:#FFFFEA;
}
.lastCell {
	background-color:lime;
}
.inset { text-shadow:#fff 0px 1px 0, #000 0 -1px 0, rgba(0,0,0,0.8) 0 30px 25px;}
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

.boton:hover {

background: #b4e391;
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2I0ZTM5MSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzliYzE3ZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNiNGUzOTEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #b4e391 0%, #9bc17d 50%, #b4e391 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b4e391), color-stop(50%,#9bc17d), color-stop(100%,#b4e391));
background: -webkit-linear-gradient(top,  #b4e391 0%,#9bc17d 50%,#b4e391 100%);
background: -o-linear-gradient(top,  #b4e391 0%,#9bc17d 50%,#b4e391 100%);
background: -ms-linear-gradient(top,  #b4e391 0%,#9bc17d 50%,#b4e391 100%);
background: linear-gradient(to bottom,  #b4e391 0%,#9bc17d 50%,#b4e391 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b4e391', endColorstr='#b4e391',GradientType=0 );
}

.gradient {
	filter:none;	
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

</style>
</head>

<body>
<link rel="shortcut icon" href="favicon.ico?v=<?php echo md5_file('favicon.ico') ?>" />
<h1><span class="inset">Available Workdays: </span></h1>
<table style="width: 100%">
	<tr style="display:none" >
		<td style="width: 182px">Schenlldurchlauf<input id="sdl" type="checkbox" onchange="toggleSDL()">
		</td>
		<td style="width: 211px">Großbildschirm<input id="cbl" type="checkbox" onchange="toggleScS()">
		</td>
		<td><font color="white">experimenteller LOG-Modus<input style="display:none" id="logmod" type="checkbox" onchange="toggleLogmod()"></font>
		</td>
	</tr>
	<tr>
		<td style="width: 182px">&nbsp;</td>
		<td colspan="2">&nbsp;</td>
	</tr>
</table>
<br>
<table id="theTable" border="1">
	<tr id="Days">
		<td class="cw">
		CW 
		</td>
		<td>
		Monday 
		</td>
		<td>
		Tuesday
		</td>
		<td>
		Wednesday
		</td>
		<td>
		Thursday
		</td>
		<td>
		Friday
		</td>
	</tr>

<?php

$mysqli = mysqli_connect("localhost", "root", "", "statistiki");

$linkArr = Array();
$dowArr = Array();
//$loc_de = setlocale(LC_ALL, 'de_DE.UTF-8', 'de_DE', 'deu_deu');


for($d=60;$d>=0;$d--) {
	$wd = date("w", strtotime("-".$d." day 00:00:01"));
	$res = mysqli_query($mysqli, "select count(*) as erg from availability_today where stamp >=".strtotime("-".$d." day 00:00:01")." and stamp <=".strtotime("-".$d." day 23:59:59").";" );
	$row = $res->fetch_assoc();

	if ($wd != 0 && $wd !=6 && strtotime("-".$d." day 00:00:01") >= 1413756001 && $row["erg"]>0)  {
	    $dateStringB = strftime("%B", strtotime("-".$d." day 00:00:01")).strftime(" %d", strtotime("-".$d." day 00:00:01")).strftime(", %Y", strtotime("-".$d." day 00:00:01"));
		//$linkArr[] = "<a href='/Liveticker.php?stamp=".strtotime("-".$d." day 00:00:01")."&sd=1&cn=0"."&name=".$dateStringB."' >".strftime("%B", strtotime("-".$d." day 00:00:01"))."<b>".strftime(" %d", strtotime("-".$d." day 00:00:01"))."</b>".strftime(", %Y", strtotime("-".$d." day 00:00:01"))." </a>";
		$linkArr[] = "<a class='asize' href='#cn=0' onClick=\"OpenInNewTab('/Liveticker.php?stamp=".strtotime("-".$d." day 00:00:01")."&sd=1&cn=0"."&name=".$dateStringB."')\" >".strftime("%B", strtotime("-".$d." day 00:00:01"))."<b>".strftime(" %d", strtotime("-".$d." day 00:00:01"))."</b>".strftime(", %Y", strtotime("-".$d." day 00:00:01"))." </a>";
		$dowArr[] = $wd; 
	}
}

$string = "<tr class='normDays'>\n";
$start = false;

/*
0 Sunday
1 Monday
2 Tuesday
3 Wednesday
4 Thursday
5 Friday
6 Saturday
*/



//$KWs = //date("W", time()); // -
$KWs = date("W", time()) - floor(count($linkArr)/5);



$cnt = 0;
for($q=0;$q<count($linkArr);$q++) {
$cnt++;
	if(!$start && ($dowArr[$q] != 1) ) $string .= "<td>&nbsp;</td>";
	else { 
		if(!$start) {
			$string .= "</tr>\n<tr><td class='cw'>".$KWs++."</td>";
			$start = true;
		}
		$string .= "\t<td>".$linkArr[$q]."</td>\n";
		if ($dowArr[$q] == 5) {
			if($q%2 == 0) $string .= "</tr>\n<tr class='ar'><td class='cw'>".$KWs++;
			else $string .= "</tr>\n<tr><td class='cw'>".$KWs++;
		}
	}
}
$string .= "</tr>\n";
echo $string;
echo "</table><br><br>";
//print_r($dowArr);
?>

<input class="boton gradient" onclick="location.href='/frame/container.php'" id="completa3"  type="button" value="Wie auf dem grossen Display"><br><br>


<input class="boton2 gradient" onclick="$.cookie('clearNum', ++clearNum, { expires : 100});location.reload()"  type="button" value="Clear Calendar History"> (clears color of visited links)
<br><br>
<input class="boton2 gradient" onclick="window.close()" type="button" value="Home"> 
<br><br>




<font color="#666666">
	Ich brauche noch Feedback, wie viele Tage idealerweise in der Datenbank historisch archiviert bleiben sollen und wie viel dieser Daten in der Wochenansicht erscheinen sollen. Jeder Tag hat ca 400 Datenpunkte. 
	Zu jedem Datenpunkt gibt es in der Datenbank eine ganze Zeile mit den zu diesem Zeitpunkt relevanten Kennzahlen. Richtwert: Alle 2 Monate kommt 1/2 Megabyte an Datenvolumen hinzu.
	Die Performanz die entsprechenden Daten auszulesen wird im Laufe der Jahre sinken.
	Ich denke bereits an einen Algorytmus der entweder alle Zeitstempel löscht, die gerade durch 2 teilbar sind oder jeden 3ten oder 4ten Datensatz zu löschen, sodass in den Altdatenbeständen pro Tag
	weniger Punkte sind. Also genau der gleiche Graph, aber statt alle 3 Minuten ein Datenpunkt etwas längere Verbindungslinien und alle 6 oder 9 Minuten nur ein Datenpunkt.
	Die kurzfristige Vergangenheit soll ihre Datendichte jedoch behalten
</font>
<script>
clearNum = $.cookie('clearNum');
if (isNaN(clearNum)) clearNum = 0;

function uHist() {
	$( "a" ).each(function( index ) {
	
	  hrf2 = $(this).attr('href');
	  hrf2 = hrf2.replace("cn=0","cn="+clearNum);
	  $(this).attr('href',hrf2);
	  //console.log( $(this).attr('href') );
	  
	});
}
uHist();


if( $("table tr:nth-child(2) td:nth-child(1)").html() == "&nbsp;") $("table tr:nth-child(2)").hide();
if( $("table tr:nth-child(2)").html().length == 1) $("table tr:nth-child(2)").hide();

$("td:last").addClass("lastCell");

function OpenInNewTab(url) {
  var win = window.open(url, '_blank');
}

</script>

</body>

</html>
