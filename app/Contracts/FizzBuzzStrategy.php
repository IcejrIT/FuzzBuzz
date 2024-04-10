<?php

namespace App\Contracts;

interface FizzBuzzStrategy
{
    public function execute(int $number): string;
}