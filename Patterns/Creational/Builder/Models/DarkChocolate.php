<?php

namespace Patterns\Creational\Builder\Models;

class DarkChocolate extends Chocolate
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * set dark chocolate 
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