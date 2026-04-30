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

    public function testAuthorQuery(): void
    {
        $this->assertEquals("Author: Deftones\n", $this->interpreter->interpret("author 2"));
        $this->assertEquals("Author: Deftones\n", $this->interpreter->interpret("2 author"));
    }

    public function testAlbumQuery(): void
    {
        $this->assertEquals("Album: Adrenaline\n", $this->interpreter->interpret("album 2"));
        $this->assertEquals("Album: Adrenaline\n", $this->interpreter->interpret("2 album"));
    }

    public function testCombinedQuery(): void
    {
        $this->assertEquals(
            "Album: Adrenaline, Author: Deftones\n",
            $this->interpreter->interpret("album author 2")
        );
    }

    public function testInvalidFormat(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->interpreter->interpret("album author"); // нет числа
    }

    public function testIndexOutOfBounds(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->interpreter->interpret("album 99"); // несуществующий индекс
    }

    public function testEmptyString(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->interpreter->interpret("");
    }
}
