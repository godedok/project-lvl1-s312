<?php

namespace BrainGames\Games\Calc;

const DESCRIPTION_CALC = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

use function \BrainGames\Cli\startGame;

function run()
{
    $getCalcGame = function () {
        $number1 = rand(0, 30);
        $number2 = rand(0, 30);
        $size = sizeof(OPERATORS) - 1;
        $operator = OPERATORS[rand(0, $size)];
        return [
            "question" => "{$number1} {$operator} {$number2}",
            "trueAnswer" => (string) calculate($number1, $number2, $operator)
        ];
    };
    startGame(DESCRIPTION_CALC, $getCalcGame);
}
function calculate($number1, $number2, $operator)
{
    switch ($operator) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '*':
            return $number1 * $number2;
    }
}
