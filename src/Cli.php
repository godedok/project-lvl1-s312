<?php
/**
 * Namespace
 *
 * PHP version 7
 *
 * @category PHP
 *
 * @package PHP_Braingames
 *
 * @author Name <username@example.com>
 *
 * @license Name https://github.com/godedok
 *
 * @link https://github.com/
 */
namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

/**
 * Function
 *
 * @return string
 */
function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
