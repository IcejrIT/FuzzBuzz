<?php

namespace App\Console\Commands;

use App\Contracts\FizzBuzzStrategy;
use Illuminate\Console\Command;

class FizzBuzzCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fizzbuzz';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Wykonuje operację FizzBuzz od 1 do 100';

    private FizzBuzzStrategy $strategy;

    public function __construct(FizzBuzzStrategy $strategy)
    {
        parent::__construct();
        $this->strategy = $strategy;
    }

    /**
     * Render values.
     */
    public function handle(): void
    {
        collect(range(1, 100))->each(function ($i) {
            $this->info($this->strategy->execute($i));
        });
    }
}
