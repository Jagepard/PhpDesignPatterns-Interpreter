<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

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
