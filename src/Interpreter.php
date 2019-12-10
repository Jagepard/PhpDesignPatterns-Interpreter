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
    private $registry;

    /**
     * @param  ItemInterface  $item
     */
    public function addItemToRegistry(ItemInterface $item): void
    {
        $this->registry[] = $item;
    }

    /**
     * @param  string  $input
     */
    public function interpret(string $input): void
    {
        $item = null;
        $input = explode(" ", $input);

        foreach ($input as $value) {
            if (is_numeric($value)) {
                $item = $this->registry[$value - 1];
            }
        }

        if ($item instanceof ItemInterface) {
            foreach ($input as $value) {
                if ($value === "album") {
                    printf("%s ", $item->getName());
                }

                if ($value === "author") {
                    printf("%s", $item->getAuthor());
                }
            }

            printf("%s", PHP_EOL);
        } else {
            throw new \InvalidArgumentException('Missing id');
        }
    }
}
