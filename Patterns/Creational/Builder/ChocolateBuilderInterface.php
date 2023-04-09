<?php

namespace Patterns\Creational\Builder;
use Patterns\Creational\Builder\Models\Chocolate;

interface ChocolateBuilderInterface
{
    public function createChocolate();
    public function addChocolate();
    public function addFlavor();
    public function addWarp();
    public function addNutritionInfo();
    public function addIngredients();
    public function addExpiredDate();
    public function getChocolate() : Chocolate;
}

?>