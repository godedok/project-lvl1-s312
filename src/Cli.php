<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const NUMBER_QUESTIONS = 3;

function startGame($description, $getEvenGame)
{
    line('Welcome to the Brain Game!');
    line("%s", $description);
    $name = prompt(line('May I have your name?'));
    line("Hello, %s!", $name);
    
    for ($i = 0; $i < NUMBER_QUESTIONS; $i++) {
        ["question" => $question, "trueAnswer" => $trueAnswer] = $getEvenGame();
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
