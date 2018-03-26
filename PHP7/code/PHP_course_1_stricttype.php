<?php
declare(strict_types=1);

//strict type
function mySum(int $a, int $b)
{
	return $a + $b;
}

try
{
	echo mySum(1,3);
	echo "<br>";
	//echo mySum(2.5, 1.5); //if strict_types=1, then throw error: Uncaught TypeError: Argument 1 passed to mySum() must be of the type integer, float given, called in C:\www\PHP_course_2_stricttype.php on //line 12 and defined in C:\www\PHP_course_2_stricttype.php:5 Stack trace: #0 C:\www\PHP_course_2_stricttype.php(12): mySum(2.5, 1.5) #1 {main} thrown in //C:\www\PHP_course_2_stricttype.php on line 5

	echo var_dump(mySum(1,3));
	echo "<br>";
	echo var_dump(mySum(1.5,2.5)); //will retuen int(3) without strict types
	echo "<br>";
}
catch (TypeError $e)
{
	echo "Error:".$e->getMessage();
}

?>