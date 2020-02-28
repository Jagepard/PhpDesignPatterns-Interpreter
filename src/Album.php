<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

class Album implements AlbumInterface
{
    private string $name;
    private string $author;

    /**
     * Album constructor.
     * @param string $name
     * @param string $author
     */
    public function __construct(string $name, string $author)
    {
        $this->name   = $name;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
}
