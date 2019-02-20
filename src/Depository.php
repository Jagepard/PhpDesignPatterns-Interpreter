<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

/**
 * Class Depository
 * @package Behavioral\Interpreter
 */
class Depository implements DepositoryInterface
{
    /**
     * @var array
     */
    private $depository = [];

    /**
     * @param ItemInterface $item
     */
    public function setItem(ItemInterface $item): void
    {
        $this->depository[] = $item;
    }

    /**
     * @param int $value
     * @return ItemInterface
     */
    public function getItem(int $value): ItemInterface
    {
        if (array_key_exists($value, $this->depository)) {
            return $this->depository[$value];
        }

        throw new \InvalidArgumentException();
    }
}
