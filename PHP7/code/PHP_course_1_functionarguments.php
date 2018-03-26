
<?php
//passing arguments by value
function take_array($input) {
    echo "$input[0]+$input[1]=", $input[0]+$input[1];
	echo "<br>";
	echo "hello "."PHP!";
	echo "<br>";
}

take_array(array(1, 2, 3));


//passing arguments by reference, if without &, the result of echo will be "This is a string, "
function add_some_extra(&$string)
{
	$string .= "and something exra.";	
}

$str = "This is a string, ";
add_some_extra($str);
echo $str;
echo "<br>";


function add_some_extra2($string)
{
	$string .= "and something exra.";	
	return $string;	
}

$str = "This is a string, ";
$str = add_some_extra2($str);
echo $str;
echo "<br>";

//default argument values
function makecoffee($type = "cappuccino")
{
	return "making a cup of $type.";
}
echo makecoffee();
echo "<br>";
echo makecoffee(null);
echo "<br>";
echo makecoffee("Lattee");
echo "<br>";

function makecoffee2($types = array("cappuccino"), $coffeeMaker = NULL)
{
	$device = is_null($coffeeMaker)? "hands":$coffeeMaker;
	return "making a cup of ".join(",", $types)." with $device";
}

echo makecoffee2();
echo "<br>";
echo makecoffee2(array("cappuccino", "lavazza", "mocha"), "teapot");
echo "<br>";



?>