<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter\Tests;

use Behavioral\Interpreter\Album;
use Behavioral\Interpreter\Depository;
use Behavioral\Interpreter\DepositoryInterface;
use Behavioral\Interpreter\Interpreter;
use Behavioral\Interpreter\InterpreterInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class InterpreterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var DepositoryInterface
     */
    protected $depository;
    /**
     * @var InterpreterInterface
     */
    protected $interpreter;

    protected function setUp(): void
    {
        $this->depository = new Depository();
        $this->getDepository()->setItem(new Album('Korn', 'Untouchables'));
        $this->getDepository()->setItem(new Album('Deftones', 'Adrenaline'));

        $this->interpreter = new Interpreter($this->getDepository());
    }

    public function testAlbum(): void
    {
        ob_start();
        $this->getInterpreter()->interpret('album 2');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s \n",  'Deftones'));

        ob_start();
        $this->getInterpreter()->interpret('2 album');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s \n",  'Deftones'));
    }

    public function testAuthor(): void
    {
        ob_start();
        $this->getInterpreter()->interpret('author 2');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s\n",  'Adrenaline'));

        ob_start();
        $this->getInterpreter()->interpret('2 author');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s\n",  'Adrenaline'));
    }

    /**
     * @return DepositoryInterface
     */
    public function getDepository(): DepositoryInterface
    {
        return $this->depository;
    }

    /**
     * @return InterpreterInterface
     */
    public function getInterpreter(): InterpreterInterface
    {
        return $this->interpreter;
    }
}
