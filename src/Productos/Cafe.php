<?php

namespace App\Productos;

use App\ProductInterface;

class Cafe extends Product implements ProductInterface
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
            $this->subQuality(2);
        }

        $this->subSellIn();

        if ($this->sellIn < 0 && $this->quality > 0) {
            $this->subQuality(2);
        }
    }
}