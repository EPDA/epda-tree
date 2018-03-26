
<?php
//DateTime Object: http://php.net/manual/en/datetime.formats.date.php
$date1 = new DateTime("August 23, 2018 4:50:12");
$date2 = new DateTime("+2 weeks");
$date3 = new DateTime("next week");
$date4 = new DateTime("tomorrow");
$date5 = new DateTime("yesterday");

$raw = "10. 11. 1968";
$date6 = DateTime::createFromFormat('d. m. Y', $raw);

echo "<p>The output date1 is: ". $date1->format('m/d/Y  H:i:s')."</p>";
echo "<p>The output date2 is: ". $date2->format('m/d/Y')."</p>";
echo "<p>The output date3 is: ". $date3->format('m/d/Y')."</p>";
echo "<p>The output date4 is: ". $date4->format('m/d/Y')."</p>";
echo "<p>The output date5 is: ". $date5->format('m/d/Y')."</p>";
echo "<p>The output date6 is: ". $date6->format('m-d-Y')."</p>";

//diff
$dvone = new DateTime("August 1, 1972");
$spike = new DateTime("Monday, 15-Aug-2005 15:52:01 ");

if ($dvone < $spike) {
	echo "<p>devone is older than spike</p>";
} else {
	echo "<p>spike is older than dvone</p>";
}

$diff = $spike->diff($dvone);

echo $diff->format("<p>There is %y years, %m months and %d days between dvone and spike</p>");

//Time Zone
$utcDateTime =  new DateTime('2014-08-24 13:14', new DateTimeZone('UTC'));
$localDateTime = clone $utcDateTime;
$localDateTime->setTimeZone(new DateTimeZone('Canada/Saskatchewan'));
$chinaDateTime = clone $utcDateTime;
$chinaDateTime->setTimeZone(new DateTimeZone('Asia/Shanghai'));

echo "<p>the UTC date/time is:".$utcDateTime->format('Y-m-d H:i:s')."</p>";
echo "<p>the Local date/time is:".$localDateTime->format('Y-m-d H:i:s')."</p>";
echo "<p>the China date/time is:".$chinaDateTime->format('Y-m-d H:i:s')."</p>";

?>
