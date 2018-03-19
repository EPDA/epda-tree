
<?php

$num_one = 1;
$num_two = 2;
$str_1 = "string 1";

echo var_dump($num_one);
echo "<br>";

echo gettype($num_two);
echo "<br>";

echo gettype($str_1);
echo "<br>";

echo var_dump(is_int($str_1));
echo "<br>";

echo is_string($str_1);
echo "<br>";

$flt = 1.2e3;
echo $flt;
echo "<br>";

$flt_2 = 7E-10;
echo $flt_2;
echo "<br>";

echo 2**5;
echo "<br>";

$str_1 = "String 1";
$str_2 = "string 2";
echo "combine "."string1 and string2:". $str_1.$str_2;
echo 'combine '.'string1 and string2:'. $str_1.$str_2;


?>

