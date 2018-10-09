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
    protected $items = [];

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item $item
     */
    public function setItem(Item $item)
    {
        $this->items[] = $item;
    }

    /**
     * @param int $value
     * @return Item
     */
    public function getItem(int $value): Item
    {
        return $this->items[$value];
    }
}
