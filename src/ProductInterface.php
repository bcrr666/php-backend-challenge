<?php

namespace App;

interface ProductInterface
{
    public function __construct(int $quality, int $sellIn);
    public function tick();
}