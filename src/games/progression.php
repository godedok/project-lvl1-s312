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
        $step = rand(2, 5);
        $progression = createProgression($startValue, $step);
        $trueAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = "..";
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
    for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
        $arrayOfNumbers[$i] = $startValue + $i * $step;
    }
    return $arrayOfNumbers;
}
