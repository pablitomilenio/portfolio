<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php

$file = '\\\cde44153\c$\temp\statistik\Export.txt';
$newfile = 'd:\xampp\htdocs\data.csv';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
?>
</body>

</html>
