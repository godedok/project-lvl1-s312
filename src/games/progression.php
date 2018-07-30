<?php

namespace BrainGames\Games\Progression;

const DESCRIPTION_PROGRESSION = 'What number is missing in this progression?';
const PROGRESSION_LENGTH = 10;

use function \BrainGames\Cli\startGame;

function run()
{
    $getProgressionGame = function () {
        $hiddenIndex = rand(0, 9);
        $startValue = rand(1, 20);
        $step = rand(1, 5);
        $progression = createProgression($startValue, $step);
        $trueAnswer = $progression[$hiddenIndex];
        $progression[$index] = "..";
        $question = implode(' ', $progression);
        return [
            "question" => "{$question}",
            "trueAnswer" => (string) $trueAnswer
        ];
    };
    startGame(DESCRIPTION_PROGRESSION, $getProgressionGame);
}

function createProgression($startValue, $step)
{
    $arrayOfNumbers = [];
    $arrayOfNumbers[0] = $startValue;
    for ($i = 1; $i < PROGRESSION_LENGTH; $i++) {
        $arrayOfNumbers[$i] = $arrayOfNumbers[$i - 1] + $step;
    }
    return $arrayOfNumbers;
}
