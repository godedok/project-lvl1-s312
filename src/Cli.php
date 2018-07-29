<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function startGame($description, $getGame)
{
    line('Welcome to the Brain Game!');
    line("%s", $description);
    $name = prompt(line('May I have your name?'));
    line("Hello, %s!", $name);
    
    $questionsNumber = 3;
    for ($i = 0; $i < $questionsNumber; $i++) {
        ["question" => $question, "trueAnswer" => $trueAnswer] = $getGame();
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");

        if ($trueAnswer === $userAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(.", $userAnswer);
            line("Correct answer was '%s'.", $trueAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
    return;
}
