<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <script src="jquery-2.1.1.js"></script>
        <script src="Smooth-0.1.7.js"></script>
        <script src="theScript.js"></script>
        
        
<style>
#resumen{
	font-size:16pt;
}
body{
	overflow:hidden;
	
}
</style>
</head>

<body>
       <canvas id="graph" width="1100" height="920"></canvas> 
        <div style="background-color:#e3fcf4; padding:10px; right:0;top:0;position:absolute; width:40%; height:100%">
	        <div id="contents" style="display:none;">empty</div>
	        <input id="btn" type="button" value="Refresh" onClick="loadVals()"/>
	        <input id="numVls" type="text" value="20" />
	        <hr>
	        
   	        <input id="jan" class="mth" type="button" value="Januar" onClick="loadVals(1)"/>
   	        <input id="jan" class="mth" type="button" value="Februar" onClick="loadVals(2)"/>
   	        <input id="jan" class="mth" type="button" value="März" onClick="loadVals(3)"/>
   	        <input id="jan" class="mth" type="button" value="Aprli" onClick="loadVals(4)"/>
   	        <input id="jan" class="mth" type="button" value="Mai" onClick="loadVals(5)"/>
   	        <input id="jan" class="mth" type="button" value="Juni" onClick="loadVals(6)"/>
   	        <input id="jan" class="mth" type="button" value="Juli" onClick="loadVals(7)"/>
   	        <input id="jan" class="mth" type="button" value="August" onClick="loadVals(8)"/>
   	        <input id="jan" class="mth" type="button" value="September" onClick="loadVals(9)"/>
   	        <input id="jan" class="mth" type="button" value="Oktober" onClick="loadVals(10)"/>
   	        <input id="jan" class="mth" type="button" value="November" onClick="loadVals(11)"/>
   	        <input id="jan" class="mth" type="button" value="Dezember" onClick="loadVals(12)"/>
   	        <hr>
   	        
   	        
   	        <div id="resumen"></div>
        </div>
    </body>

</html>