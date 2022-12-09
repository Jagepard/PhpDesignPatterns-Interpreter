<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter\Tests;

use Behavioral\Interpreter\{Album, CardFile, Interpreter, InterpreterInterface};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class InterpreterTest extends PHPUnit_Framework_TestCase
{
    protected InterpreterInterface $interpreter;

    protected function setUp(): void
    {
        $cardFile = new CardFile();
        $cardFile->addAlbum(new Album("Korn", "Untouchables"));
        $cardFile->addAlbum(new Album("Deftones", "Adrenaline"));
        $this->interpreter = new Interpreter($cardFile);
    }

    public function testAlbum(): void
    {
        $this->assertEquals("Deftones\n", $this->interpreter->interpret("author 2"));
        $this->assertEquals("Deftones\n", $this->interpreter->interpret("2 author"));
    }

    public function testAuthor(): void
    {
        $this->assertEquals("Adrenaline\n", $this->interpreter->interpret("album 2"));
        $this->assertEquals("Adrenaline\n", $this->interpreter->interpret("2 album"));
    }
}
