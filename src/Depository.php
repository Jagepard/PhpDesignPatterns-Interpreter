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
class Depository
{
    /**
     * @var array
     */
    protected $depository = [];

    /**
     * @return array
     */
    public function getDepository(): array
    {
        return $this->depository;
    }

    /**
     * @param Item $item
     */
    public function setItem(Item $item)
    {
        $this->depository[] = $item;
    }

    /**
     * @param int $value
     * @return Item
     */
    public function getItem(int $value): Item
    {
        return $this->depository[$value];
    }
}
