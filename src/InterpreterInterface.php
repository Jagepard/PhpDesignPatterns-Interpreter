<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

interface InterpreterInterface
{
    public function interpret(string $inputString): string;
}
