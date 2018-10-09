<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter\Tests;

use Behavioral\Interpreter\Item;
use Behavioral\Interpreter\Depository;
use Behavioral\Interpreter\Interpreter;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class InterpreterTest
 * @package Behavioral\Interpreter\Tests
 */
class InterpreterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Depository
     */
    protected $depository;
    /**
     * @var Interpreter
     */
    protected $interpreter;

    protected function setUp(): void
    {
        $this->depository = new Depository();
        $this->depository->setItem(new Item('Korn', 'Korn'));
        $this->depository->setItem(new Item('Deftones', 'Adrenaline'));

        $this->interpreter = new Interpreter($this->depository);
    }

    public function testAlbum(): void
    {
        ob_start();
        $this->interpreter->interpret('album 2');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s: %s\n", ' Album', 'Adrenaline'));

        ob_start();
        $this->interpreter->interpret('2 album');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s: %s\n", ' Album', 'Adrenaline'));
    }

    public function testAuthor(): void
    {
        ob_start();
        $this->interpreter->interpret('author 2');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s: %s\n", ' Author', 'Deftones'));

        ob_start();
        $this->interpreter->interpret('2 author');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s: %s\n", ' Author', 'Deftones'));
    }
}
