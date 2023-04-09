<?php

namespace Patterns\Creational\Builder;
use Patterns\Creational\Builder\Models\Chocolate;
use Patterns\Creational\Builder\ChocolateBuilderInterface;
use Patterns\Creational\Builder\Models\HazelnutChocolate;

class HazelnutChocolateBuilder implements ChocolateBuilderInterface
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
        $this->type = new HazelnutChocolate(); 
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
        $this->type->setPart('flavor', 'hazelnut');
    }
    
    /**
     * @return void
     */
    public function addWarp()
    {
        $this->type->setPart('warp', 'blue_white');
    }
    
    /**
     * @return void
     */
    public function addExpiredDate()
    {
        $this->type->setPart('expired_date', '23-8-2024');
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
        $this->type->setPart('nutrition_info', ['calories'=>'150']);
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