<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

interface InterpreterInterface
{
    /**
     * @param string $input
     * @return array
     */
    public function interpret(string $input): array;
}
