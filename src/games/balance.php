<?php

namespace BrainGames\Games\Balance;

const DESCRIPTION_BALANCE = 'Balance the given number.';

use function \BrainGames\Cli\startGame;

function run()
{
    $getBalanceGame = function () {
        $question = rand(10, 10000);
        return [
            "question" => "{$question}",
            "trueAnswer" => (string) balanceNumber($question)
        ];
    };
    startGame(DESCRIPTION_BALANCE, $getBalanceGame);
}

function balanceNumber($number)
{
    $arrayOfNumbers = array_map('intval', str_split($number));
    while (max($arrayOfNumbers) - min($arrayOfNumbers) > 1) {
        $arrayOfNumbers[array_search(min($arrayOfNumbers), $arrayOfNumbers)] += 1;
        $arrayOfNumbers[array_search(max($arrayOfNumbers), $arrayOfNumbers)] -= 1;
    }
    sort($arrayOfNumbers);
    return implode("", $arrayOfNumbers);
}
