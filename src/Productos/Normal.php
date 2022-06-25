<?php

namespace App\Productos;

use App\ProductInterface;

class Normal implements ProductInterface
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
        if ($this->quality > 0) {
            $this->quality -= 1;
        }

        $this->sellIn -= 1;

        if ($this->sellIn < 0) {
            $this->quality -= 1;
        }
    }
}