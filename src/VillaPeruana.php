<?php

namespace App;

use App\Factory\ProductFactory;

class VillaPeruana
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
     * @param int $quality
     * @param int $sellIn
     */
    public function __construct(string $name, int $quality, int $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    /**
     * @param string $name
     * @param int $quality
     * @param int $sellIn
     * @return static
     */
    public static function of(string $name, int $quality, int $sellIn) {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        $product = new ProductFactory();
        $product = $product->instance($this->name, $this->quality, $this->sellIn);
        $product->tick();

        $this->quality = $product->quality;
        $this->sellIn = $product->sellIn;
    }
}