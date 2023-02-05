	<?php
		$parm = $_GET['parm'];
		$monthNum = $_GET['month'];
		
		$yearNum = 2016;
		
		$firstday = strtotime($monthNum."/01/".$yearNum);
		$lastday  = strtotime($monthNum."/".date("t", $firstday )."/".$yearNum. " 23:59");	
		
		
		$mysqli = mysqli_connect("localhost", "root", "", "wf");
		$query = "select * from kurse where stamp > $firstday and stamp < $lastday order by stamp asc ";
		$res = mysqli_query($mysqli,$query);
		
		$valString = "";
		$stmpString = "";
		
		while ($row = $res->fetch_assoc()) {
	    	$values[] = $row['kurs'];
	    	$valString .= ",".$row['kurs'];
   	    	$stmpString .= ",".date('d.m.Y H:i',$row['stamp'])."";
	    }
	    
	    $valString = substr($valString, 1,999999999);
   	    $stmpString = substr($stmpString, 1,999999999);
   	    
   	    echo $valString.";".$stmpString;
   	       	    
	?>

       


