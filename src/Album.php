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
     * Sets the author and album titles
     * -----------------------------------------
     * Устанваливает наименования автор и альбом
     *
     * @param  string $author
     * @param  string $album
     */
    public function __construct(string $author, string $album)
    {
        $this->author = $author;
        $this->album = $album;
    }

    /**
     * Gets the name of the author of the album
     * ----------------------------------------
     * Получает наименование автора альбома
     *
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Gets the title of the album
     * ---------------------------
     * Получает название альбома
     *
     * @return string
     */
    public function getAlbum(): string
    {
        return $this->album;
    }
}

