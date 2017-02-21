<?php

class Recipe
{
    private $title;
    private $ingredients = [];
    private $instructions = [];
    private $yield;
    private $tags = [];
    private $source = "Etienne Fichot";

    private $measurements = [
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    ];

    public function __construct($string)
    {
        $this->title = $string;
    }

    public function __toString()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        return ($this->title = ucwords($title));
    }

    public function getTitle()
    {
        return ($this->title);
    }

    public function getIngredients()
    {
        return ($this->ingredients);
    }

    public function addIngredient($name, $amount = null, $measure = null)
    {
        if ($amount && !is_integer($amount) && !is_float($amount))
        {
            exit("The amount must be an float and is not: " . gettype($amount));
        }
        if ($measure && !in_array(strtolower($measure), $this->measurements))
        {
            exit("Not valid measure, " . implode(", ", $this->measurements));
        }
        $this->ingredients[] = [
            "name" => ucwords($name),
            "amount" => $amount,
            "measure" => strtolower($measure)
        ];
    }

    public function addInstruction($instruction)
    {
        $this->instructions[] = $instruction;
    }

    public function getInstruction()
    {
        return ($this->instructions);
    }

    public function setYield($string)
    {
        $this->yield = $string;
    }

    public function getYield()
    {
        return ($this->yield);
    }

    public function addTags($tag)
    {
        $this->tags[] = $tag;
    }

    public function getTags()
    {
        return ($this->tags);
    }

    public function setSource($source)
    {
        $this->source = ucwords($source);
    }

    public function getSource()
    {
        return ($this->source);
    }
}
