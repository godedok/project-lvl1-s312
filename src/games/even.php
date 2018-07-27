<?php

namespace BrainGames\Games\Even;

const DESCRIPTION = 'Answer "yes" if number even otherwise answer "no"';

use function \BrainGames\Cli\startGame;

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $getEvenGame = function () {
        $question = rand(1, 666);
        $answer = isEven($question) ? 'yes' : 'no';
        return ['question' => $question, 'trueAnswer' => $answer];
    };
    startGame(DESCRIPTION, $getEvenGame);
}
