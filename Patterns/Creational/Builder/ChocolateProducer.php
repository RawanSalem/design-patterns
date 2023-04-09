<?php

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Models\Chocolate;
use Patterns\Creational\Builder\ChocolateBuilderInterface;

class ChocolateProducer
{    
    /**
     * builder
     *
     * @var ChocolateBuilderInterface
     */
    private $builder;
    
    /**
     * create new chocolate
     *
     * @param  ChocolateBuilderInterface $builder
     * @return void
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }
    
    /**
     * produce Chocolate
     *
     * @return Chocolate
     */
    public function produceChocolate() : Chocolate
    {
        $this->builder->createChocolate();
        $this->builder->addChocolate();
        $this->builder->addFlavor();
        $this->builder->addWarp();
        $this->builder->addIngredients();
        $this->builder->addNutritionInfo();
        $this->builder->addExpiredDate();
        return $this->builder->getChocolate();
    }

}


?>