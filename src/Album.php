<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

final class Album
{
    public function __construct(private string $author, private string $album) {}

    public function getAlbum(): string
    {
        return $this->album;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}
