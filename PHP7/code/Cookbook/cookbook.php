<?php
include "classes/recipe.php";

ini_set('display_errors',1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
   //throw new ErrorExeption($errstr, 0, $errno, $errfile, $errline); 
	echo "<p>Custom error:[$errno] $errstr</p>";
	echo "error on line $errline in $errfile<br>";
});

try{
	$recipe1 = new Recipe();
	$recipe1->setTitle("my first recipe");
	$recipe1->setSource ("Tim Horston");
	echo $recipe1->displayRecipe() . "<br>";
	
	$recipe1->addIngredient("egg", 2);
	$recipe1->addIngredient("flour", 2, "cup");
	foreach($recipe1->getIngredients() as $ing){
		echo $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"] . "<br>";
	}
	
	$recipe1->addInstruction("This is my 1st instruction");
	$recipe1->addInstruction("This is my 2nd instruction");
	echo implode("<br>", $recipe1->getInstructions());
	echo "<br>";
	
	$recipe1->addTag("Main Course");
	$recipe1->addTag("Breakfast");
	echo implode(", ", $recipe1->getTags());
	echo "<br>";
	
	$recipe1->setYield("6 servings");
	echo $recipe1->getYield();
	echo "<br>";
	
} catch(Throwable $t)
{
	echo "<p>Error</p>";
	echo $t->getMessage();
}catch(Exception $e)
{
	echo "<p>Exception</p>";
	echo $e->getMessage();
}