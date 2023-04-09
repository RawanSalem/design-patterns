<?php

namespace Patterns\Creational\Builder\Models;

class CaramelChocolate extends Chocolate
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * set caramel chocolate 
     *
     * @param  mixed $name
     * @param  mixed $value
     * @return void
     */
    public function setPart($name, $value)
    {
        $this->data['name'] = $value;
    }
}

?>