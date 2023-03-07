<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

interface RegistryInterface
{
    /**
     * @return array
     */
    public function getData(): array;
}
