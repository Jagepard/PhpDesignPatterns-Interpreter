<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

class Interpreter implements InterpreterInterface
{
    private array $registryData;

    public function __construct(RegistryInterface $registry)
    {
        $this->registryData = $registry->getData();
    }

    public function interpret(string $input): string
    {
        $num    = 0;
        $output = [];

        if (preg_match('~[0-9]+~', $input, $match)) {
            $num = $match[0] - 1;
        }

        if (preg_match('~author~', $input)) {
            $output[] = $this->registryData[$num]->getAuthor();
        }

        if (preg_match('~album~', $input)) {
            $output[] = $this->registryData[$num]->getAlbum();
        }

        return implode(' ', $output) . "\n";
    }
}
