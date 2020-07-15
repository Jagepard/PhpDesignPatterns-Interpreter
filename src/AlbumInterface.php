<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

interface AlbumInterface
{
    /**
     * @return string
     */
    public function getAuthor(): string;

    /**
     * @return string
     */
    public function getAlbum(): string;
}
