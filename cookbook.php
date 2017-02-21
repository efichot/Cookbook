<?php
include("classes/recipe.php");
include("classes/render.php");
$recipe1 = new Recipe("saumon et epinard");
$recipe1->setSource("Grandma Etienne");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");
$recipe1->addInstruction("My first instruction!");
$recipe1->addInstruction("My second instruction!");
echo Render::displayRecipe($recipe1);
