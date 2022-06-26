<?php

namespace App\Productos;

class Product
{
    /**
     * @var string|string
     */
    public $name;

    /**
     * @var int|int
     */
    public $quality;

    /**
     * @var int|int
     */
    public $sellIn;

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $quality
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    /**
     * @param int $sellIn
     */
    public function setSellIn($sellIn)
    {
        $this->sellIn = $sellIn;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @return int
     */
    public function getSellIn()
    {
        return $this->sellIn;
    }

    public function addQuality(int $point)
    {
        return $this->quality += $point;
    }

    public function subQuality(int $point)
    {
        return $this->quality -= $point;
    }

    public function removeQuality()
    {
        return $this->quality = 0;
    }

    public function subSellIn()
    {
        return $this->sellIn -= 1;
    }
}