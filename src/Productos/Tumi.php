<?php

namespace App\Productos;

use App\ProductInterface;

class Tumi extends Product implements ProductInterface
{
    public $quality;
    public $sellIn;

    /**
     * @param int $quality
     * @param int $sellIn
     */
    public function __construct(int $quality, int $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick()
    {
        //
    }
}