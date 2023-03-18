<?php
class Food 
{
    private $breakfast;
    private $lunch;
    private $budget;
 

    public function setBreakfast($breakfast)
    {
        $this->breakfast = $breakfast;
    }

    public function getBreakfast()
    {
        return this->breakfast;
    }

    public function setLunch($lunch)
    {
        $this->lunch = $lunch;
    }

    public function getLunch()
    {
        return this->lunch;
    }

    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    public function getBudget()
    {
        return this->budget;
    }

    public function displayInfo()
    {
        echo "Breakfast: " .$this->breakfast. "<br>";
        echo "Lunch: " .$this->lunch. "<br>";
        echo "Budget: " .$this->budget. "<br>";
    }

    public function overrideDisplayInfo()
    {
        echo "Diet: <br>";
        $this->displayInfo();
    }
}

class Prep extends Food
{
    private $ingredients;
    public function __construct ($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getMealPrep()
    {
        return $this->ingredients;
    }

    public function overloadPrintInfo($meal)
    {
        echo "Ingredients: " .$this->ingredients. "<br>";
        echo "Meal: " .$meal. "<br>";
    }

    public function overrideDisplayInfo()
    {
        echo "Food Menu: <br>";
        parent::displayInfo();
        echo "Meal Summary: <br>";
        $this->overloadPrintInfo("Meal");
    }
}

class Beverage extends Food
{
    private $drink;

    public function __construct($drink)
    {
        $this->drink = $drink;
    }

    public function getDrink ()
    {
        return $this->drink;
    }

    public function printInfo()
    {
        echo "Drink: " .$this->drink. "<br>";
    }

    public function overrideDisplayInfo()
    {
        echo "Food Menu: <br>";
        parent::displayInfo();
        echo "Drink Summary: <br>";
        $this->printInfo();
    }
}

$food_intake = new Food();
$food_intake->setBreakfast("Pandesal");
$food_intake->setLunch("Menudo");
$food_intake->setBudget(250);
$food_intake->displayInfo();
$food_intake->overrideDIsplayInfo();

$food_prep = new Prep("Food Details");
$food_prep->setBreakfast("Ensaymada");
$food_prep->setLunch("Lechon Kawali");
$food_prep->setBudget(240);
$food_prep->overloadPrintInfo("Meal");
$food_prep->overrideDisplayInfo();

$food_beverage = new Beverage("Drinks");
$food_beverage->setBreakfast("Instant Noodles");
$food_beverage->setLunch("Adobo");
$food_beverage->setBudget(230);
$food_beverage->printInfo();
$food_beverage->overrideDisplayInfo();

?>