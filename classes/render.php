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

    public static function listByTitle($titles)
    {
        $ret = "";
        asort($titles);
        foreach ($titles as $key => $title)
        {
            $ret .= "[$key] => $title\n";
        }
        return $ret;
    }

    public function __toString()
    {
        $ret = "";
        $ret .= "The methods available for this class: " . __CLASS__ . " are : " . implode("\n", get_class_methods(__CLASS__));
        return $ret;
    }
    public static function shoppingList($ingredients)
    {
        ksort($ingredients);
        return (implode(", ", array_keys($ingredients)));
    }
}
