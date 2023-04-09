<?php

namespace Patterns\Creational\Builder;
use Patterns\Creational\Builder\Models\CaramelChocolate;
use Patterns\Creational\Builder\Models\Chocolate;
use Patterns\Creational\Builder\ChocolateBuilderInterface;

class CaramelChocolateBuilder implements ChocolateBuilderInterface
{
/**
     * @var Chocolate $type 
     */
    private $type;
        
    /**
     * @return void
     */
    public function createChocolate()
    {
        $this->type = new CaramelChocolate(); 
    }
    
    /**
     * @return void
     */
    public function addChocolate()
    {
        $this->type->setPart('chocolate', 'milk_chocolate');
    }
    
    /**
     * @return void
     */
    public function addFlavor()
    {
        $this->type->setPart('flavor', 'caramel');
    }
    
    /**
     * @return void
     */
    public function addWarp()
    {
        $this->type->setPart('warp', 'yellow_red');
    }
    
    /**
     * @return void
     */
    public function addExpiredDate()
    {
        $this->type->setPart('expired_date', '1-10-2023');
    }
    
    /**
     * @return void
     */
    public function addIngredients()
    {
        $this->type->setPart('Ingredients', ['']);
    }
    
    /**
     * @return void
     */
    public function addNutritionInfo()
    {
        $this->type->setPart('nutrition_info', ['calories'=>'180']);
    }
    
    /**
     * @return Chocolate
     */
    public function getChocolate() : Chocolate
    {
        return $this->type;
    } 
}

?>