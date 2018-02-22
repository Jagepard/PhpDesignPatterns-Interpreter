<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Interpreter;

/**
 * Class Depository
 *
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
     *
     * @return Item
     */
    public function getItem(int $value): Item
    {
        return $this->items[$value];
    }
}
