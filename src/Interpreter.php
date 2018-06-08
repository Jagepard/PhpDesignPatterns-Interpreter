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
class Interpreter
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
    public function interpret(string $input)
    {
        if (count($this->depository->getItems())) {

            $values = explode(' ', $input);

            foreach ($values as $value) {
                if (is_numeric($value)) {
                    $this->item = $this->depository->getItem($value - 1);
                }
            }

            if ($this->item instanceof Item) {
                foreach ($values as $value) {
                    switch ($value) {
                        case 'author':
                            printf('%s: %s', ' Author', $this->item->getAuthor());
                            break;
                        case 'album':
                            printf('%s: %s', ' Album', $this->item->getAlbum());
                            break;
                    }
                }
            }

            printf('%s', "\n");
        }
    }
}
