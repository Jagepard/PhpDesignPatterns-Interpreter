<?php

declare(strict_types = 1);

/**
 * Date: 27.05.16
 * Time: 12:52
 * 
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2016, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Interpreter;

/**
 * Class Interpreter
 *
 * @package Behavioral\Interpreter
 */
class Interpreter
{

    /**
     * @var Depository
     */
    protected $depository;

    /**
     * @var
     */
    protected $item;

    /**
     * Interpreter constructor.
     *
     * @param Depository $depository
     */
    public function __construct(Depository $depository)
    {
        $this->depository = $depository;
    }

    /**
     * @param string $inputString
     */
    public function interpret(string $inputString)
    {
        if (count($this->getDepository()->getItems())) {

            $arrayValues = explode(' ', $inputString);

            foreach ($arrayValues as $parsedString) {
                if (is_numeric($parsedString)) {
                    $this->setItem($this->getDepository()->getItem($parsedString - 1));
                }
            }

            $this->getValue($arrayValues);
        }
    }

    /**
     * @param array $arrayValues
     */
    public function getValue(array $arrayValues): void
    {
        foreach ($arrayValues as $value) {
            if ('author' == $value) {
                print ' Автор: ' . $this->getItem()->getAuthor();
            } elseif ('album' == $value) {
                print ' Альбом: ' . $this->getItem()->getAlbum();
            }
        }

        print "\r\n";
    }

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * @param Item $item
     */
    public function setItem(Item $item)
    {
        $this->item = $item;
    }

    /**
     * @return Depository
     */
    public function getDepository(): Depository
    {
        return $this->depository;
    }
}
