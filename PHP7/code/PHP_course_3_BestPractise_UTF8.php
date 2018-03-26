
<?php
//UTF-8, Unicode Transfer Format

//To check if mbstring is enabled or not
//phpinfo();
//exit;

//Tell mbstring to use UTF-8 encodeing for all of its functions
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

$string = 'Rychlá hnědá liška zakopl přes plot.';
$string2 = '中文Test测试一二三';

header('Content-Type:text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
<title>TEST UTF-8</title>
</head>
<body>
	<p>Upper: <?PHP echo strtoupper($string)?></p>  <!--the accented characters are not changed to Upper-->
	<p>Length: <?PHP echo strlen($string)?></p>     <!-- return 41 instead of 36 which we counted by eyes-->
	<p>MB Upper: <?=mb_strtoupper($string)?></p>  <!--All characters are changed to Upper -->
	<p>MB Length: <?=mb_strlen($string)?></p>     <!-- return 36 -->
	
	<p>Upper: <?=strtoupper($string2)?></p>  
	<p>Length: <?=strlen($string2)?></p>     
	<p>MB Upper: <?=mb_strtoupper($string2)?></p>  
	<p>MB Length: <?=mb_strlen($string2)?></p>     
</body>
</html>
