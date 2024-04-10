<?php

namespace App\Services\FizzBuzz;

use App\Contracts\FizzBuzzStrategy;

class StandardFizzBuzzStrategy implements FizzBuzzStrategy
{
    public function execute(int $number): string
    {
        $result = '';
        if ($number % 3 == 0) { $result .= 'Fizz'; }
        if ($number % 5 == 0) { $result .= 'Buzz'; }
        return $result !== '' ? $result : $number;
    }
}