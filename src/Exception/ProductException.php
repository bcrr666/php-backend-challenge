<?php

namespace App\Exception;

class ProductException extends \Exception
{
    protected $message = 'El producto seleccionado es inexistente';
}