<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter\Tests;

use Behavioral\Interpreter\Album;
use Behavioral\Interpreter\Interpreter;
use Behavioral\Interpreter\InterpreterInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class InterpreterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var InterpreterInterface
     */
    protected $interpreter;

    protected function setUp(): void
    {
        $this->interpreter = new Interpreter();
        $this->interpreter->addAlbumToRegistry(new Album('Korn', 'Untouchables'));
        $this->interpreter->addAlbumToRegistry(new Album('Deftones', 'Adrenaline'));
    }

    public function testAlbum(): void
    {
        ob_start();
        $this->interpreter->interpret('album 2');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s \n",  'Deftones'));

        ob_start();
        $this->interpreter->interpret('2 album');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s \n",  'Deftones'));
    }

    public function testAuthor(): void
    {
        ob_start();
        $this->interpreter->interpret('author 2');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s\n",  'Adrenaline'));

        ob_start();
        $this->interpreter->interpret('2 author');
        $album = ob_get_clean();
        $this->assertEquals($album, sprintf("%s\n",  'Adrenaline'));
    }
}
