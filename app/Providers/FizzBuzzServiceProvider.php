<?php

namespace App\Providers;

use App\Contracts\FizzBuzzStrategy;
use App\Services\FizzBuzz\StandardFizzBuzzStrategy;
use Illuminate\Support\ServiceProvider;

class FizzBuzzServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(FizzBuzzStrategy::class, StandardFizzBuzzStrategy::class);
    }
}