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
     * @var DepositoryInterface
     */
    protected $depository;

    /**
     * Interpreter constructor.
     * @param DepositoryInterface $depository
     */
    public function __construct(DepositoryInterface $depository)
    {
        $this->depository = $depository;
    }

    /**
     * @param string $input
     */
    public function interpret(string $input = null): void
    {
        if (!isset($input)) {
            throw new \InvalidArgumentException();
        }

        $item  = null;
        $input = explode(" ", $input);

        foreach ($input as $value) {
            if (is_numeric($value)) {
                $item = $this->getDepository()->getItem($value - 1);
            }
        }

        if (!isset($item)) {
            throw new \InvalidArgumentException();
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

    /**
     * @return DepositoryInterface
     */
    public function getDepository(): DepositoryInterface
    {
        return $this->depository;
    }
}
