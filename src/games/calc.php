<?php

namespace BrainGames\Games\Calc;

const DESCRIPTION_CALC = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

use function \BrainGames\Cli\startGame;

function run()
{
    $getCalcGame = function () {
        $n1 = rand(0, 30);
        $n2 = rand(0, 30);
        $op = OPERATORS[rand(0, 2)];
        return [
            "question" => "{$n1} {$op} {$n2}",
            "trueAnswer" => calculate($n1, $n2, $op)
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
