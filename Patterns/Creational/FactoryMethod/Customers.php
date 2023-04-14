<?php

namespace Patterns\Creational\FactoryMethod;

interface Customers
{    
    /**
     * getDiscountTotal
     *
     * @param  int $price
     * @return float
     */
    public function getDiscountTotal(int $price) : float;
}