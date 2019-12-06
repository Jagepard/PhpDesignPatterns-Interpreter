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
    public function interpret(string $input): void
    {
        $item  = null;
        $input = explode(" ", $input);

        foreach ($input as $value) {
            if (is_numeric($value)) {
                $item = $this->getDepository()->getItem($value - 1);
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

    /**
     * @return DepositoryInterface
     */
    public function getDepository(): DepositoryInterface
    {
        return $this->depository;
    }
}
