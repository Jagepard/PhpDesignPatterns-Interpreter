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

    /**
     * Receives filing data
     * --------------------------
     * Принимает данные картотеки
     *
     * @param  RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        $this->registryData = $registry->getData();
    }

    /**
     * Interpret the request according to the incoming $input string
     * --------------------------------------------------------------
     * Инерпретирует запрос в соответствии со входящей строкой $input
     *
     * @param  string $input
     * @return string
     */
    public function interpret(string $input): string
    {
        $num    = 0;
        $output = [];

        if (preg_match('~[0-9]+~', $input, $match)) {
            $num = $match[0] - 1;
        }

        if (!array_key_exists($num, $this->registryData)) {
            throw new \InvalidArgumentException("Element $num does not exist in the registry");
        }

        if (strpos($input, 'author') !== false) {
            $output[] = $this->registryData[$num]->getAuthor();
        }

        if (strpos($input, 'album') !== false) {
            $output[] = $this->registryData[$num]->getAlbum();
        }

        return implode(' ', $output) . "\n";
    }
}
