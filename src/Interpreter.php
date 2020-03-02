<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

class Interpreter implements InterpreterInterface
{
    private array $registry;

    /**
     * @param  AlbumInterface  $item
     */
    public function addAlbumToRegistry(AlbumInterface $item): void
    {
        $this->registry[] = $item;
    }

    /**
     * @param  string  $input
     */
    public function interpret(string $input): void
    {
        $input = explode(" ", $input);

        foreach ($input as $value) {
            if (is_numeric($value)) {
                $this->getDataFromRegistry($input, $this->registry[$value - 1]);
            }
        }
    }

    /**
     * @param  array  $input
     * @param $item
     */
    private function getDataFromRegistry(array $input, AlbumInterface $item): void
    {
        foreach ($input as $value) {
            if ($value === "album") {
                printf("%s ", $item->getName());
            }

            if ($value === "author") {
                printf("%s", $item->getAuthor());
            }
        }

        printf("%s", PHP_EOL);
    }
}
