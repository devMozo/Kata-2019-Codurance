<?php

use App\GameOfLife;
use PHPUnit\Framework\TestCase;

class TestGameOfLife extends TestCase
{
    public function test_If_random_function_returns_expected_array_of_length_3()
    {
        $expectedPatternLength = 3;
        $gameofLife = new GameOfLife();
        $Pattern = $gameofLife->randomFunction();
        $PatternLength = count($Pattern);
        $this->assertEquals($expectedPatternLength, $PatternLength);
    }
}