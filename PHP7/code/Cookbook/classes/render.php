<?PHP

class Render
{
	public static function listIngredients($ingredients)
	{
		$output = "";
		foreach($ingredients as $ing){
			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
			$output .= "\n";
	    }
		
		return $output;
	}
	
	public static function displayRecipe($recipe)
	{
		$output = "";
		$output .= $recipe->getTitle() . " by " . $recipe->getSource();
		$output .= "\n";
		$output .= implode(",", $recipe->getTags());
        $output .= "\n\n";		
		$output .= self::listIngredients($recipe->getIngredients());
		$output .= "\n";
		$output .= implode("\n", $recipe->getInstructions());
		$output .= "\n";
		$output .= $recipe->getYield();
		$output .= "\n";
		
		echo $output;
	} 
	
	public static function listRecipes($titles)
	{
		asort($titles);
		$output = "";
		foreach($titles as $key=>$title){
			if (!empty($output)){
				$output .= "\n";
			}
			$output .= "[$key] $title";
		}
		return $output;
	}
	
	public static function listShopping($ingredient_list)
	{
		ksort($ingredient_list);
		$shopping = implode("\n", array_keys($ingredient_list));		
		return $shopping;
	}
}