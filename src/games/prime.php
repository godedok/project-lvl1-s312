<?php

namespace BrainGames\Games\Prime;

const DESCRIPTION_PRIME = 'Answer "yes" if number prime otherwise answer "no".';

use function \BrainGames\Cli\startGame;

function run()
{
    $getPrimeGame = function () {
        $question = rand(1, 100);
        $trueAnswer = isPrime($question) ? 'yes' : 'no';
        return [
            "question" => "{$question}",
            "trueAnswer" => $trueAnswer
        ];
    };
    startGame(DESCRIPTION_PRIME, $getPrimeGame);
}

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}
