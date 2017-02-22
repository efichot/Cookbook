<?php
include("classes/recipe.php");
include("classes/render.php");
include("includes/recipes.php");
include("classes/recipecollection.php");

$cookbook = new RecipeCollection("Etienne Recipe");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($beef_medallions);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);
$breakfast = new RecipeCollection("Breakfast");
foreach ($cookbook->getTagsRecipe("breakfast") as $recipe)
{
    $breakfast->addRecipe($recipe);
}
//echo Render::shoppingList($breakfast->getIngredientsList());
//echo Render::listByTitle($breakfast->getTitlesRecipe());
echo Render::listByTitle($cookbook->filterById(7, 6, 0, 2));
