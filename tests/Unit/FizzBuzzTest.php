<?php
namespace Tests\Unit;

use Tests\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testExecuteFizzBuzz()
    {
        $output = $this->artisan('fizzbuzz');

        for ($i = 1; $i <= 100; $i++) {
            $expectedOutput = '';

            if ($i % 3 == 0) {
                $expectedOutput .= 'Fizz';
            }

            if ($i % 5 == 0) {
                $expectedOutput .= 'Buzz';
            }

            if ($expectedOutput === '') {
                $expectedOutput =  strval($i);
            }

            $output->expectsOutput($expectedOutput);
        }

        $output->assertExitCode(0);
    }
}