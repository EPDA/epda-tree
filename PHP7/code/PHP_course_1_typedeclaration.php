
<?php
//type declaration

//1.Basic class type declaration

class C {}
class D extends C {}

class E {} //not extend C

function f (C $c)
{
	echo get_class($c);
}

f(new C);
echo "<br>";
f(new D);
echo "<br>";
//f(new E); //Fatal error: Uncaught TypeError: Argument 1 passed to f() must be an instance of C, instance of E given, called in //C:\www\PHP_course_2_typedeclaration.php on line 21 and defined in C:\www\PHP_course_2_typedeclaration.php:12 Stack trace: #0 //C:\www\PHP_course_2_typedeclaration.php(21): f(Object(E)) #1 {main} thrown in C:\www\PHP_course_2_typedeclaration.php on line 12
echo "<br>";


//2. Basic interface type declaration
interface I {public function f();}
class C2 implements I {public function f() {}}

class E2 {}

function f2(I $i)
{
	echo get_class($i);
}

f2(new C2);
echo "<br>";
//f2(new E2); //Fatal error: Uncaught TypeError: Argument 1 passed to f2() must implement interface I, instance of E2 given, called in //C:\www\PHP_course_2_typedeclaration.php on line 38 and defined in C:\www\PHP_course_2_typedeclaration.php:31 Stack trace: #0 //C:\www\PHP_course_2_typedeclaration.php(38): f2(Object(E2)) #1 {main} thrown in C:\www\PHP_course_2_typedeclaration.php on line 31
echo "<br>";

//3. Nullable type declaration
class C3 {}
function f3(C3 $c = null)
{
	var_dump($c);
}

f3(new C3);
echo "<br>";
f3();
echo "<br>";
f3(null);
echo "<br>";

?>