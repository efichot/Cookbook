<?php
class RecipeCollection
{
    private $title;
    private $recipes = [];

    public function __construct($title)
    {
        $this->title = $title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function addRecipe($recipe)
    {
        $this->recipes[] = $recipe;
    }
    public function getRecipe()
    {
        return ($this->recipes);
    }
    public function getTitlesRecipe()
    {
        $titles = [];
        foreach($this->recipes as $recipe)
        {
            $titles[] = $recipe->getTitle();
        }
        return($titles);
    }
    public function __toString()
    {
        return (implode("\n", $this->getTitlesRecipe()));
    }
    public function getTagsRecipe($tag)
    {
        $tagsRecipe = [];
        foreach ($this->recipes as $recipe)
        {
            if (in_array(strtolower($tag), $recipe->getTags()))
            {
                $tagsRecipe[] = $recipe;
            }
        }
        return ($tagsRecipe);
    }
    public function getIngredientsList()
    {
        $ingredients = [];
        foreach ($this->recipes as $recipe)
        {
            foreach ($recipe->getIngredients() as $i)
            {
                $name = $i["name"];
                if (strpos($name, ","))
                {
                    $name = strstr($name, ",", true);
                }
                $ingredients[$name][] = [$i["amount"], $i["measure"]];
            }
        }
        return ($ingredients);
    }
    public function filterById()
    {
        $arr = [];
        foreach(func_get_args() as $id)
        {
            $arr[] = $this->recipes[$id]->getTitle();
        }
        return ($arr);
    }
}
