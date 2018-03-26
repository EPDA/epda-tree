
<?php

echo random_bytes(1);
echo "<br>";
echo random_int(100,10000);
echo "<br>";
//loose comparison
echo "0 and any string:";
echo "0"=="any string";
echo "<br>";

echo "0 and 1:";
echo "0"=="1";
echo "<br>";

echo "0 and NULL:";
echo "0"==NULL;
echo "<br>";

echo "0 and 0:";
echo "0"==0;
echo "<br>";

echo "0 and array('a'):";
echo "0"==array('a');
echo "<br>";

echo "0 and array('0'):";
echo "0"==array('0');
echo "<br>";

echo "1 and array('a'):";
echo 1==array('a');
echo "<br>";

echo "1 and string:";
echo 1=="haha";
echo "<br>";

echo ("is_null(array()):");
echo is_null(array());
echo "<br>";
echo ("NULL array():");
echo NULL==array();
echo "<br>";
echo ("is_null empyty string:");
echo is_null("");
echo "<br>";
echo ("NULL empyty string:");
echo NULL=="";
echo "<br>";

?>

