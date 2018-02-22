<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class InterpreterTest extends PHPUnit_Framework_TestCase
{

    protected $depository;

    protected $interpreter;

    protected function setUp(): void
    {
        $this->depository = new \Behavioral\Interpreter\Depository();

        $this->depository->setItems(new \Behavioral\Interpreter\Item('Korn', 'Korn'));
        $this->depository->setItems(new \Behavioral\Interpreter\Item('Deftones', 'Adrenaline'));

        $this->interpreter = new \Behavioral\Interpreter\Interpreter($this->depository);
    }

    public function testDepository(): void
    {
        $this->assertInstanceOf(\Behavioral\Interpreter\Depository::class, $this->getDepository());
    }

    public function testInterpreter(): void
    {
        $this->getInterpreter()->interpret('author 2');

        $this->assertInstanceOf(\Behavioral\Interpreter\Interpreter::class, $this->getInterpreter());
    }

    public function testAlbum(): void
    {
        ob_start();
        $this->assertNull($this->getInterpreter()->interpret('album 2'));
        $album = ob_get_clean();
        $this->assertEquals($album, " Альбом: Adrenaline");

        ob_start();
        $this->assertNull($this->getInterpreter()->interpret('2 album'));
        $album = ob_get_clean();
        $this->assertEquals($album, " Альбом: Adrenaline");
    }

    public function testAuthor(): void
    {
        ob_start();
        $this->assertNull($this->getInterpreter()->interpret('author 2'));
        $album = ob_get_clean();
        $this->assertEquals($album, " Автор: Deftones");

        ob_start();
        $this->assertNull($this->getInterpreter()->interpret('2 author'));
        $album = ob_get_clean();
        $this->assertEquals($album, " Автор: Deftones");
    }

    /**
     * @return mixed
     */
    public function getDepository(): \Behavioral\Interpreter\Depository
    {
        return $this->depository;
    }

    /**
     * @return mixed
     */
    public function getInterpreter(): \Behavioral\Interpreter\Interpreter
    {
        return $this->interpreter;
    }
}