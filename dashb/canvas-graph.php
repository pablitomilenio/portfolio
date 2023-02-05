<!DOCTYPE html><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>



<head>
<meta http-equiv="X-UA-Compatible" content="IE=11"/>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<link rel="shortcut icon" href="/Final2.ico" type="image/x-icon">
<link rel="icon" href="/Final2.ico" type="image/x-icon">

<?php
if (!isset($_GET['stamp'])) $stamp = strtotime("00:00:01");
else $stamp = $_GET['stamp'];
$stamp2 = $stamp + 86397;

$mysqli = mysqli_connect("localhost", "root", "", "statistiki");
$query = "select * from availability_today where stamp > ".$stamp." AND stamp <= ".$stamp2;
$res = mysqli_query($mysqli,$query);

$stack = "";
$dbTimes = "";

while ($row = $res->fetch_assoc()) {
    $stack .= (floatval(str_replace(",", ".", $row['ThisMonth']))*100-86.4).";";
    $dbTimes .= date("H:i:s",$row['stamp']).";";
}


$query2 = "select * from status";
$res2 = mysqli_query($mysqli,$query2);
$row2 = $res2->fetch_assoc();
$err = $row2['no_data'];



?>


<script>
jsStamp = 0;
jsuStamp = "<?php echo $stamp ?>";
vals2 = "<?php echo $stack ?>";
times2 = "<?php echo $dbTimes ?>";
times2b = times2.split(";");
vals = vals2.split(";");
vals.pop();
times2b.pop();

xes = times2b;
yes = vals;
</script>



        <title>Interactive Line Graph</title>
        <script src="jquery-2.1.1.js"></script>
        <script>
            var graph;
            var xPadding = 30;
            var yPadding = 30;
            
            // Returns the max Y value in our data list
            function getMaxY() {
                var max = 0;
                
                for(var i = 0; i < yes.length; i ++) {
                    if(yes[i] > max) {
                        max = yes[i];
                    }
                }
                
                //max += 10 - max % 10;
                return max;
                //return 10;
            }
            
            // Return the x pixel for a graph point
            function getXPixel(val) {
                return ((graph.width() - xPadding) / yes.length) * val + (xPadding * 1.5);
            }
            
            // Return the y pixel for a graph point
            function getYPixel(val) {
                return graph.height() - (((graph.height() - yPadding) / getMaxY()) * val) - yPadding;
            }

            $(document).ready(function() {
                graph = $('#graph');
                var c = graph[0].getContext('2d');            
                
                c.lineWidth = 2;
                c.strokeStyle = '#333';
                c.font = 'italic 8pt sans-serif';
                c.textAlign = "center";
                
                // Draw the axises
                c.beginPath();
                c.moveTo(xPadding, 0);
                c.lineTo(xPadding, graph.height() - yPadding);
                c.lineTo(graph.width(), graph.height() - yPadding);
                c.stroke();
                
                // Draw the X value texts
                for(var i = 0; i < yes.length; i ++) {
                    c.fillText(xes[i], getXPixel(i), graph.height() - yPadding + 20);
                }
                
                // Draw the Y value texts
                c.textAlign = "right"
                c.textBaseline = "middle";
                
                for(var i = 0; i < getMaxY(); i += 10) {
                    c.fillText(i, xPadding - 10, getYPixel(i));
                }
                
                c.strokeStyle = '#f00';
                
                // Draw the line graph
                c.beginPath();
                c.moveTo(getXPixel(0), getYPixel(yes[0]));
                for(var i = 1; i < yes.length; i ++) {
                    c.lineTo(getXPixel(i), getYPixel(yes[i]));
                }
                c.stroke();
                
                // Draw the dots
                c.fillStyle = '#333';
                
                for(var i = 0; i < yes.length; i ++) {  
                    c.beginPath();
                    c.arc(getXPixel(i), getYPixel(yes[i]), 4, 0, Math.PI * 2, true);
                    c.fill();
                }
            });
        </script>
    </head>
    <body>
        <canvas id="graph" width="1024" height="640">   
        </canvas> 
    </body>
</html>