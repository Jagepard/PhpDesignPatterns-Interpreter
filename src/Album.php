<?php

declare(strict_types=1);

/**
 * @album  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

class Album implements AlbumInterface
{
    private string $author;
    private string $album;

    /**
     * Album constructor.
     * @param string $author
     * @param string $album
     */
    public function __construct(string $author, string $album)
    {
        $this->author = $author;
        $this->album = $album;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getAlbum(): string
    {
        return $this->album;
    }
}

