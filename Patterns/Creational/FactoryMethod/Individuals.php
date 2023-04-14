<?php

namespace Patterns\Creational\FactoryMethod;

class Individuals implements Customers
{
    /**
     * discount
     *
     * @var float
     */
    private $discount = 0.1;

    /**
     * getDiscountTotal
     *
     * @param int $price
     * @return float $total
     */
    public function getDiscountTotal(int $price): float
    {
        $total = $price - ($price * $this->discount);

        return $total;
    }
}