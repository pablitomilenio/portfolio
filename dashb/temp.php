<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)http://www.zamza.cl/contabilidad/Leistungsindex/ -->
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script src="jquery-2.1.1.js"></script>
<title>get</title>
</head>

<body>
<div id="div1">hola</div>
	<script>
			$("#div1").load("deliverLiveVals.php?rand="+Math.random()+"&stamp=1416028479");
			setTimeout("postProcess()",200);
			function postProcess(){
				respuesta = $('#div1').text();
				a1 = respuesta.split("/");
				uV = a1[0];
				uT = a1[1];
				
				uValues = uV.split(";");
				uTimes = uT.split(";");
				
				uValues.pop();
				uTimes.pop();
				
				
			}
	</script>
</body>