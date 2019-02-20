<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

/**
 * Interface DepositoryInterface
 * @package Behavioral\Interpreter
 */
interface DepositoryInterface
{
    /**
     * @param ItemInterface $item
     */
    public function setItem(ItemInterface $item): void;

    /**
     * @param int $value
     * @return ItemInterface
     */
    public function getItem(int $value): ItemInterface;
}
