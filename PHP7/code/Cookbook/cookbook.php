<?php
include "classes/recipe.php";
include "classes/render.php";
include "inc/recipes.php";
include "classes/recipecollection.php";

//echo Render::displayRecipe($dried_mushroom_ragout) . "<br>";
$cookBook = new RecipeCollection("Treehouse Recipes");
$cookBook->addRecipe($lemon_chicken);
$cookBook->addRecipe($granola_muffins);
$cookBook->addRecipe($belgian_waffles);
$cookBook->addRecipe($pepper_casserole);
$cookBook->addRecipe($lasagna);
$cookBook->addRecipe($dried_mushroom_ragout);
$cookBook->addRecipe($rabbit_catalan);
$cookBook->addRecipe($grilled_salmon_with_fennel);
$cookBook->addRecipe($pistachio_duck);
$cookBook->addRecipe($chili_pork);
$cookBook->addRecipe($crab_cakes);
$cookBook->addRecipe($beef_medallions);
$cookBook->addRecipe($silver_dollar_cakes);
$cookBook->addRecipe($french_toast);
$cookBook->addRecipe($corn_beef_hash);
$cookBook->addRecipe($granola);
$cookBook->addRecipe($spicy_omelette);
$cookBook->addRecipe($scones);

$breakfast = new RecipeCollection("Favorite Breakfast");
foreach($cookBook->filterByTag("breakfast") as $recipe){
	$breakfast->addRecipe($recipe);
}

//echo Render::listRecipes($breakfast->getRecipeTitles());
//echo Render::listShopping($breakfast->getCombinedIngredients());
/*
echo Render::listRecipes($cookBook->getRecipeTitles());
echo "\n\nBreakfast\n";
echo Render::listRecipes($breakfast->getRecipeTitles());
*/
/*
echo Render::displayRecipe($cookBook->filterById(2));
echo "\n\n\n";
echo Render::displayRecipe($breakfast->filterById(4));
*/

$week1 = new RecipeCollection("Week1 Recipes");
$week1->addRecipe($cookBook->filterById(2));
$week1->addRecipe($cookBook->filterById(3));
$week1->addRecipe($cookBook->filterById(6));
$week1->addRecipe($cookBook->filterById(16));
echo Render::listRecipes($week1->getRecipeTitles());
echo "\n\n****Shopping List****\n\n";
echo Render::listShopping($week1->getCombinedIngredients());

/*
ini_set('display_errors',1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
   //throw new ErrorExeption($errstr, 0, $errno, $errfile, $errline); 
	echo "<p>Custom error:[$errno] $errstr</p>";
	echo "error on line $errline in $errfile<br>";
});

try{
	$recipe1 = new Recipe("my first recipe");
	$recipe1->setSource ("Tim Horston");
	
	$recipe1->addIngredient("egg", 2);
	$recipe1->addIngredient("flour", 2, "cup");
	
	$recipe1->addInstruction("This is my 1st instruction");
	$recipe1->addInstruction("This is my 2nd instruction");
	
	$recipe1->addTag("Main Course");
	$recipe1->addTag("Breakfast");
	
	$recipe1->setYield("6 servings");
	
	echo $recipe1;
	echo "*************************";
	echo Render::displayRecipe($recipe1) . "<br>";
	
} catch(Throwable $t)
{
	echo "<p>Error</p>";
	echo $t->getMessage();
}catch(Exception $e)
{
	echo "<p>Exception</p>";
	echo $e->getMessage();
}
*/

