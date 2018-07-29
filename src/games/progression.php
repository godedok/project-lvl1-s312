<?php

namespace BrainGames\Games\Progression;

const DESCRIPTION_PROGRESSION = 'What number is missing in this progression?';

use function \BrainGames\Cli\startGame;

function run()
{
    $getProgressionGame = function () {
        $index = rand(0, 9);
        $progression = createProgression();
        $trueAnswer = $progression[$index];
        $progression[$index] = "..";
        $question = implode(' ', $progression);
        return [
            "question" => "{$question}",
            "trueAnswer" => (string) $trueAnswer
        ];
    };
    startGame(DESCRIPTION_PROGRESSION, $getProgressionGame);
}

function createProgression()
{
    $arrayOfNumbers = [];
    $arrayOfNumbers[0] = rand(1, 20);
    $step = rand(1, 5);
    $progressionLength = 10;
    for ($i = 1; $i < $progressionLength; $i++) {
        $arrayOfNumbers[$i] = $arrayOfNumbers[$i - 1] + $step;
    }
    return $arrayOfNumbers;
}
