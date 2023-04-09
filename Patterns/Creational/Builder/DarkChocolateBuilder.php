<?php

namespace Patterns\Creational\Builder;
use Patterns\Creational\Builder\ChocolateBuilderInterface;
use Patterns\Creational\Builder\Models\Chocolate;
use Patterns\Creational\Builder\Models\DarkChocolate;

class DarkChocolateBuilder implements ChocolateBuilderInterface
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
        $this->type = new DarkChocolate(); 
    }
    
    /**
     * @return void
     */
    public function addChocolate()
    {
        $this->type->setPart('chocolate', 'dark_chocolate');
    }
    
    /**
     * @return void
     */
    public function addFlavor()
    {
        $this->type->setPart('flavor', 'null');
    }
    
    /**
     * @return void
     */
    public function addWarp()
    {
        $this->type->setPart('warp', 'dark_brown');
    }
    
    /**
     * @return void
     */
    public function addExpiredDate()
    {
        $this->type->setPart('expired_date', '1-1-2024');
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
        $this->type->setPart('nutrition_info', ['calories'=>'120']);
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