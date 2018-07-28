<?php

namespace BrainGames\Test;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt(line('May I have your name?'));
    line("Hello, %s!", $name);
}