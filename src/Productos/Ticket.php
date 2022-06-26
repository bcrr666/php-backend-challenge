<?php

namespace App\Productos;

use App\ProductInterface;

class Ticket extends Product implements ProductInterface
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
        if ($this->quality < 50) {
            $this->addQuality(1);
        }

        if ($this->sellIn < 11 && $this->quality < 50) {
            $this->addQuality(1);
        }
        if ($this->sellIn < 6 && $this->quality < 50) {
            $this->addQuality(1);
        }

        $this->subSellIn();

        if ($this->sellIn < 0) {
            $this->removeQuality();
        }
    }
}