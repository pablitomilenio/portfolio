
<head>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

<link rel="shortcut icon" href="/Final2.ico" type="image/x-icon">
<link rel="icon" href="/Final2.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="/Overall.css?new77">

<title>Monatsverteilung</title>

<script src="/jquery-2.1.1.js"></script>
<script src="/jquery.cookie.js"></script>

<style>
.today{
	background-color:#CEE3F6; border-radius:8px; border:3px solid blue;
}

.today td {
	border:3px solid blue;
}

body {
	



  background: -webkit-linear-gradient(90deg, #ECE9E6 10%, #FFFFFF 90%); /* Chrome 10+, Saf5.1+ */
  background:    -moz-linear-gradient(90deg, #ECE9E6 10%, #FFFFFF 90%); /* FF3.6+ */
  background:     -ms-linear-gradient(90deg, #ECE9E6 10%, #FFFFFF 90%); /* IE10 */
  background:      -o-linear-gradient(90deg, #ECE9E6 10%, #FFFFFF 90%); /* Opera 11.10+ */
  background:         linear-gradient(90deg, #ECE9E6 10%, #FFFFFF 90%); /* W3C */
                                
}

</style>

</head>


<?php
if (!isset($_GET["monthNum"])) $monthNum = date("m", mktime() );
else $monthNum = $_GET["monthNum"];

$mnOrig = date("m", mktime() );

$prevMonth = $monthNum -1;
$nextMonth = $monthNum +1;

if($monthNum == 1) {
	$prevMonth = 12;
}
if($monthNum == 12) {
	$nextMonth = 1;
}

$yearNum = date("Y", mktime() );

if ($monthNum > $mnOrig) {
   $yearNum--;
}

$currMonth = date("m", mktime() );

/*
$yearNum = 2015;
$monthNum = 12;
*/

$firstday = strtotime($monthNum."/01/".$yearNum);
$lastday  = strtotime($monthNum."/".date("t", $firstday )."/".$yearNum. " 23:59"); //hier muss noch 23:59 herien

$monthName = date("F", $firstday);
?>

<body>
<link rel="shortcut icon" href="geschuetzt/favicon.ico?v=<?php echo md5_file('favicon.ico') ?>" />
<h1><span class="inset">Monatsverteilung <?php echo $monthName ?>: </span> <input type="button" value="<" onClick="window.location.assign('TopsFlops.php?monthNum=<?php echo $prevMonth ?>')" /><input type="button" value=">" onClick="window.location.assign('TopsFlops.php?monthNum=<?php echo $nextMonth ?>')" /></h1>
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

Die Spaltenüberschriften sind zur aufsteigenden Sortierung klickbar &nbsp;&nbsp;&nbsp;<input class="hov" type="button" value="Farben ausblenden" onclick="$('tr').css('background-color','white');$('body').css('background','white');"/>
<div style="position:absolute;top:20px;right:20px;" id="fabbtn"></div>
<table id="theTable" border="1">
<?php

$firstRow = "	<tr id='Days' style='background-color:white'><td class='cw hov' onclick=\"$('#theTable').html(platz);\" >Platz</td>" .
		"<td class='cw hov' onclick=\"$('#theTable').html(dow);\">Day</td><td class='tdm hov'>(Ɛα)<br><font color=gray>accurate</font></td><td class='tdm hov'>".
		
		"(Ɛη)<br><font color=gray>normal</font></td><td class='hov' onclick=\"$('#theTable').html(platz);\" ><u>This Month<br>Delta</u> (‰)</td><td class='hov'  onclick=\"$('#theTable').html(closing);\">This Month<br>Closing Value</td>".
		"<td  class='hov' onclick=\"$('#theTable').html(calls);\">&nbsp;&nbsp;Calls&nbsp;&nbsp;</td><td  class='hov' onclick=\"$('#theTable').html(days);\">Workday<br>Number</td><td class='hov' >Comment</td></tr>";


/*
echo $firstday."<br>";
echo $lastday."<br>";
echo date("d m Y",$firstday)."<br>";
echo date("d m Y",$lastday)."<br>";
*/

/*
echo "Last Day:".date("d m Y",$lastday)."<br>";
echo "String:".date("d m Y",strtotime("-63 day 00:00:01"))."<br>";
*/

$mysqli = mysqli_connect("localhost", "root", "", "statistiki");

$linkArr = Array();
$dowArr = Array();
//$loc_de = setlocale(LC_ALL, 'de_DE.UTF-8', 'de_DE', 'deu_deu');

$inVal = (31*(($currMonth-$monthNum)+1));

for($d=$inVal;$d>=($inVal-31*2);$d--) {
	$wd = date("w", strtotime("-".$d." day 00:00:01"));
    $wt = date("D", strtotime("-".$d." day 00:00:01"));

	//Erg.
	$res = mysqli_query($mysqli, "select count(*) as erg from availability_today where stamp >=".strtotime("-".$d." day 00:00:01")." and stamp <=".strtotime("-".$d." day 23:59:59").";" );
	$row = $res->fetch_assoc();
	//AvToday End of Day
	$res = mysqli_query($mysqli, "select REPLACE(ThisMonth, ',', '.')*100 as tm from availability_today where stamp >=".strtotime("-".$d." day 00:00:01")." and stamp <=".strtotime("-".$d." day 23:59:59")." order by stamp desc limit 1;" );
	$rowTM = $res->fetch_assoc();
	//calls
	$res = mysqli_query($mysqli, "select Calls_LT as calls from availability_today where stamp >=".strtotime("-".$d." day 00:00:01")." and stamp <=".strtotime("-".$d." day 23:59:59")." order by stamp desc limit 1;" );
	$rowCalls = $res->fetch_assoc();
	//comments
	$res = mysqli_query($mysqli, "select IF( (".strtotime('-'.$d.' day 00:00:01')." - (stamp-1) >0) ,1,0) as hc from comments where stamp=".strtotime("-".$d." day 00:00:01").";" );
	$rowComm = $res->fetch_assoc();

/*
	echo "fd:".$firstday."<br>";
	echo "ld:".$lastday."<br>";
	echo "stt1:".strtotime("-".$d." day 00:00:01")."<br>";
	echo "erg".$row["erg"]."<br>";
*/
	if ($wd != 0 && $wd !=6 && strtotime("-".$d." day 00:00:01") >= $firstday && strtotime("-".$d." day 00:00:01") <= $lastday && $row["erg"]>0)  {

	    $dateStringB = strftime("%B", strtotime("-".$d." day 00:00:01")).strftime(" %d", strtotime("-".$d." day 00:00:01")).strftime(", %Y", strtotime("-".$d." day 00:00:01"));
		$linkArr[]  = "<a class='asize' href='#cn=0' onClick=\"OpenInNewTab('/Liveticker.php?stamp=".strtotime("-".$d." day 00:00:01")."&sd=1&cn=0"."&name=".$dateStringB."')\" >".strftime("%B", strtotime("-".$d." day 00:00:01"))."<b>".strftime(" %d", strtotime("-".$d." day 00:00:01"))."</b>".strftime(", %Y", strtotime("-".$d." day 00:00:01"))." </a>";
		$linkArrA[] = "<a class='asize' href='#cn=0' onClick=\"OpenInNewTab('/LivetickerM.php?stamp=".strtotime("-".$d." day 00:00:01")."&sd=1&cn=0"."&name=".$dateStringB."')\" >".strftime("%B", strtotime("-".$d." day 00:00:01"))."<b>".strftime(" %d", strtotime("-".$d." day 00:00:01"))."</b>".strftime(", %Y", strtotime("-".$d." day 00:00:01"))." </a>";
		$tmArr[] = $rowTM["tm"];
		$calls[] = $rowCalls["calls"];
		$dowArr[] = $wd; 
		$stampsArr[] = strtotime("-".$d." day 00:00:01");
		$commentsArr[] = $rowComm["hc"];
		$wt2[] = $wt;
	}
}

$string = "";
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

//Preprocess arrays
for($q=0;$q<count($linkArr);$q++) {

	

	if ($q>0) {
		if ($tmArr[$q-1]>99) $tmArr[$q-1] = 85;
		$deltas[] = ($tmArr[$q]-$tmArr[$q-1])*10;
	}
	else $deltas[] = 0;
	
	$closingVals[] = $tmArr[$q];
	
	
	
	$stamps[] = $stampsArr[$q];

	$daynumber[] = $q;
	
	$wot[] = $wt2[$q];
	
	if($commentsArr[$q]<1) $comm[] = "Info_black_s.png";
	else $comm[] = "Info_green_s.png";
		
	if ($calls[$q] == -1) $calls[$q] = '';
}


$maxStamp = max($stamps);

array_multisort($deltas,$calls,$closingVals,$daynumber,$linkArr,$linkArrA,$stamps,$comm,$wot);

$maxQ = count($linkArr);

$umbral = round($maxQ/4);

//Create display string
for($q=0;$q<count($linkArr);$q++) {

	if($q<=$umbral-1) $platz[$q] = ($q+1)*-1;
	else 	$platz[$q] = ($maxQ-$q);
	
	if($deltas[$q] >= 0) $plusSign = "+";
	else $plusSign = "";
	
	if($maxStamp == $stamps[$q]) {
		$lineStart[] = "\t<tr class='today'>"; 
		$closingVals[$q] = round($closingVals[$q],4);
		$deltas[$q] = round($deltas[$q],4);
		$endVal = round($closingVals[$q],3);
	}
	else {	
		$closingVals[$q] = number_format($closingVals[$q], 0, '.', ',');
		$deltas[$q] = round($deltas[$q],0);
		if($q<=$umbral-1) $lineStart[] = "\t<tr style=\"background-color:#e55451\">";
		if($q<($maxQ-$umbral) && $q>=$umbral) $lineStart[] = "\t<tr style=\"background-color:lightyellow\">";
		if($q>=($maxQ-$umbral)) $lineStart[] = "\t<tr style=\"background-color:lightgreen\">";
	}

	$myRows[] = "<td class='tdm'>".$platz[$q]."</td><td>".$wot[$q]."</td><td>".$linkArrA[$q]."</td><td>".$linkArr[$q]."</td><td class='tdr'><b>".$plusSign.$deltas[$q]." ‰</b></td><td class='tdr'>".$closingVals[$q]."%</td><td class='tdm'>".$calls[$q]."</td><td class='tdm'>".($daynumber[$q]+1)."</td><td class='tdm'><a href='#' onClick='myw = window.open(\"comments.php?stamp=".$stamps[$q]."\",\"Test\",\"width=700, height=680, resizable=yes\")'><img src='/img/".$comm[$q]."' width='25px'></a></td></tr>";
	$tRows[] = $lineStart[$q].$myRows[$q];
}

echo "</table><br><br>";

$backup = $tRows;

$string = "<tr class='normDays'>";
for($q=0;$q<count($linkArr);$q++) $string .= $tRows[$q];

array_multisort($wot,$tRows);
$string2 = "<tr class='normDays'>";
for($q=0;$q<count($linkArr);$q++) $string2 .= $tRows[$q];

$tRows = $backup;
array_multisort($closingVals,$tRows);
$string3 = "<tr class='normDays'>";
for($q=0;$q<count($linkArr);$q++) $string3 .= $tRows[$q];

$tRows = $backup;
array_multisort($calls,$tRows);
$string4 = "<tr class='normDays'>";
for($q=0;$q<count($linkArr);$q++) $string4 .= $tRows[$q];

$tRows = $backup;
array_multisort($daynumber,$tRows);
$string5 = "<tr class='normDays'>";
for($q=0;$q<count($linkArr);$q++) $string5 .= $tRows[$q];

//Deltas
/*
echo "<br>";
print_r($tmArr);
echo "<br>";
echo "<br>";
print_r($deltas);
*/
?>

<script>
platz = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($firstRow.$string)); ?>";
dow = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($firstRow.$string2)); ?>";
closing = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($firstRow.$string3)); ?>";
calls  = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($firstRow.$string4)); ?>";
days  = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($firstRow.$string5)); ?>";

//$('#theTable').html(decodeURIComponent(tabcont1));
$('#theTable').html(platz);

</script>

<div class="alarm" >
<b>Fehler</b>: Außerhalb der offiziellen Servicezeiten von 6-19 Uhr kommen oft auch Anrufe herein, die vermutlich meistens verloren gehen. <br>Daraus resultiert die Diskrepanz im Delta. 
Der Accurate View zeigt eine eindeutige Steigung aber das Delta ist trotzdem negativ:<br>
Die Monatsverteilung zeigt einen schwachen oder negativen Tag in der Tabelle an aber wenn man im Accurate View nachverfolgen will ist es positiv
<br> Grund: Das Delta berechnet sich aus der Differenz zweier Tage in 24 Stundenintervallen und der Accurate View stellt nur 
die Servicezeiten dar.
</div><br><br>

<div class="alarm" style="background-color:lime">
<b>Grobabschaetzung</b>: Wenn im gruenen Bereich staerkere Delta-Werte vorhanden sind als im roten, dann wird das <b>Monatsergebnis</b> positiv.<br>
Deltas Gemessen in Promille (1/1000)<br><br>
<b>Veränderungen</b>: Zu Monatsanfang verursachen wenige Calls bereits große Veränderungen. Zu Monatsende sind Schwankungen schwieriger erreichbar<br>
<b>Richtwert</b>: Zu Monatsanfang sind ca. 50 Promille (5%) pro Tag möglich. Ab der Monatsmitte ca. 1 Prozent jeden Tag und im letzten Drittel 1 Prozent alle 2 Tage<br>
</div><br><br>
<table style="background-color:#CEE3F6; font-size:12pt;border-radius:8px;"><tr><td>Hellblau: Abschlusstag bzw. heute (Werte sind live)</td></tr></table><br>

<div>Dieser Monat hat als momentanen <div class="alarm"> Endwert <?php echo $endVal ?>% </div> monatlicher Erreichbarkeit LT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u><b onclick="window.open('/gauge_cd.php', '', 'fullscreen=yes, scrollbars=auto,width=1920,height=1080');">Monatswaage</b></u></div><br><br>

<input class="boton2 gradient" onclick="$.cookie('clearNum', ++clearNum, { expires : 100});location.reload()"  type="button" value="Clear Calendar History"> (clears color of visited links)
<br><br>
<input class="boton2 gradient" onclick="window.close()" type="button" value="Home"> 
<br><br>




<font color="#666666">
</font>
<script>
hpos = window.innerHeight/2;
lpos = window.innerWidth/2;

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

//$("td:last").addClass("lastCell");

function OpenInNewTab(url) {
  var win = window.open(url, '_blank');
}

function refPer() {
	location.reload();
}

//refInt = setInterval(refPer(),90000);


</script>

</body>

</html>
