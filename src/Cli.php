<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

const NUMBER_QUESTIONS = 3;
const WELCOME = 'Welcome to the Brain Game!';
const NAME_QUESTION = 'May I have your name?';

function startGame($description, $getEvenGame)
{
    line("%s", WELCOME);
    line("%s", $description);
    $name = prompt(line("%s", NAME_QUESTION));
    line("Hello, %s!", $name);
    
    for ($i = 0; $i < NUMBER_QUESTIONS; $i++) {
        ["question" => $question, "trueAnswer" => $trueAnswer] = $getEvenGame();
        line("Question: %s", $question);
        $userAnswer = prompt("Your answer");

        if ($trueAnswer == $userAnswer) {
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

function run()
{
    line("%s", WELCOME);
    $name = prompt(line("%s", NAME_QUESTION));
    line("Hello, %s!", $name);
}
