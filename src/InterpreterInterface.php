<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

/**
 * Interface InterpreterInterface
 * @package Behavioral\Interpreter
 */
interface InterpreterInterface
{
    /**
     * @param string $input
     */
    public function interpret(string $input): void;
}
