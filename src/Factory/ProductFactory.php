<?php

namespace App\Factory;

use App\Exception\ProductException;
use App\Productos\Cafe;
use App\Productos\Normal;
use App\Productos\Pisco;
use App\Productos\Ticket;
use App\Productos\Tumi;
use App\Resource\ProductList;

class ProductFactory
{
    public function instance(string $product, int $quality, int $sellIn)
    {
        switch ($product) {
            case ProductList::PISCO:
                return new Pisco($quality, $sellIn);
            case ProductList::TICKET:
                return new Ticket($quality, $sellIn);
            case ProductList::COFFEE:
                return new Cafe($quality, $sellIn);
            case ProductList::TUMI:
                return new Tumi($quality, $sellIn);
            case ProductList::NORMAL:
                return new Normal($quality, $sellIn);
            default:
                throw new ProductException();
                break;
        }
    }
}