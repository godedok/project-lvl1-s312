<?php

namespace BrainGames\Games\Gcd;

const DESCRIPTION_GCD = 'Find the greatest common divisor of given numbers.';

use function \BrainGames\Cli\startGame;

function run()
{
    $getGcdGame = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        return [
            "question" => "{$number1} {$number2}",
            "trueAnswer" => gcd($number1, $number2)
        ];
    };
    startGame(DESCRIPTION_GCD, $getGcdGame);
}

function gcd($number1, $number2)
{
    return ($number1 % $number2) ? gcd($number2, $number1 % $number2) : $number2;
}
