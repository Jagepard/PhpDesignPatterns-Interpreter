<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

class Interpreter implements InterpreterInterface
{
    /**
     * @var array
     */
    private $depository;

    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void
    {
        $this->depository[] = $item;
    }

    /**
     * @param string $input
     */
    public function interpret(string $input): void
    {
        $item  = null;
        $input = explode(" ", $input);

        foreach ($input as $value) {
            if (is_numeric($value)) {
                $item = $this->depository[$value - 1];
            }
        }

        foreach ($input as $value) {
            if ($value == "album") {
                printf("%s ", $item->getName());
            }

            if ($value == "author") {
                printf("%s", $item->getAuthor());
            }
        }

        printf("%s", PHP_EOL);
    }
}
