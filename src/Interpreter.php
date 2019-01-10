<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

/**
 * Class Interpreter
 * @package Behavioral\Interpreter
 */
class Interpreter implements InterpreterInterface
{
    /**
     * @var Item
     */
    protected $item;
    /**
     * @var Depository
     */
    protected $depository;

    /**
     * Interpreter constructor.
     * @param Depository $depository
     */
    public function __construct(Depository $depository)
    {
        $this->depository = $depository;
    }

    /**
     * @param string $input
     */
    public function interpret(string $input): void
    {
        $input = explode(" ", $input);

        foreach ($input as $value) {
            if (is_numeric($value)) {
                $item = $this->depository->getItems()[$value - 1];
            }
        }

        foreach ($input as $value) {
            if ($value == "album") {
                printf("%s ", $item->getAlbum());
            }

            if ($value == "author") {
                printf("%s", $item->getAuthor());
            }
        }

        printf("%s", PHP_EOL);
    }
}
