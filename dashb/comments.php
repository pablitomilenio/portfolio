<head>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta name="msapplication-navbutton-color" content="#660066" />
<link rel="shortcut icon" href="/Final2.ico" type="image/x-icon">
<link rel="icon" href="/Final2.ico" type="image/x-icon">
<title>Comments</title>


<script src="/jquery-2.1.1.js"></script>
<script src="/jquery.cookie.js"></script>

<style>
.myta{
	font-family:MetaPlusLF;
	font-size:14pt;
	color:blue;
	border-radius:8px;
	border:3px solid red;
	background-color:#FFCCFF;
	padding:10px;
	overflow:auto;
	font-weight:bold;
}
</style>
</head>


<?php
	if (!isset($_GET["stamp"])) $stamp = 0;
	else $stamp = $_GET["stamp"];
	
	echo date("d. F Y",$stamp)."<br>";

	$mysqli = mysqli_connect("localhost", "root", "", "statistiki");

	$res = mysqli_query($mysqli, "select * from comments where stamp=$stamp");
	$row = $res->fetch_assoc();

?>

<body>
<div style="position:absolute; right:10;top:10;"><img src="../img/Info_black.png" width="130px"></div>
<pre>
Hinweise:

=> Wie ist die tägliche, wöchentliche<br>&nbsp;&nbsp; und monatliche Situation einzuschätzen?
=> Gab es Massenstoerungen?
=> Sind mehrere Systeme gleichzeitig ausgefallen?
=> Was hat nicht funktioniert?
=> Hatte es auswirkungen von früher oder auf Folgetage?

</pre>

<textarea id="big" cols="80" rows="15" class="myta"><?php echo $row["big"];?></textarea><br>
<pre>
Wie viele Arbeitskräfte waren an dem Tag (inkl. Homeoffice, nur LT) taetig:
</pre>
<input class="myta" id="employees" type="text" value="<?php echo $row["employees"];?>" size="1"/><br><br>

<input type="button" value="Speichern" onClick="save()"+big/><br>

<script>
function save() {
	big = $('#big').html();
	big = big.replace(/\n\r?/g, '\<br\>');
	emp = $('#employees').val();
	stamp = <?php echo $stamp ?>;
	window.location="saveCom.php?stamp="+stamp+"&big="+big+"&employees="+emp;
}

function correct() {
	big = $('#big').html();
	big = big.replace(/&lt;br&gt;/g, '\n');
	$('#big').html(decodeURIComponent(big));
}

correct();
</script>


</body>

</html>
