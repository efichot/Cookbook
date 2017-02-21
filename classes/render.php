<?php
class Render
{
    public static function listIngredients($ingredient)
    {
        $ret = "";
        foreach ($ingredient as $ing)
        {
            $ret .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["name"];
            $ret .= "\n";
        }
        return ($ret);
    }

    public static function displayRecipe($recipe)
    {
        $ret = "";
        $ret .= $recipe->getTitle() . " by " . $recipe->getSource();
        $ret .= "\n";
        $ret .= implode(", ", $recipe->getTags());
        $ret .= "\n";
        $ret .= self::listIngredients($recipe->getIngredients());
        $ret .= "\n";
        $ret .= implode(", ", $recipe->getInstruction());
        $ret .= "\n";
        $ret .= $recipe->getYield();
        return ($ret);
    }
}
