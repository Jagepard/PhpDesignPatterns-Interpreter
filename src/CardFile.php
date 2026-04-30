<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

final class CardFile
{
    private array $albums = [];

    public function addAlbum(Album $album) 
    {
        if(in_array($album, $this->albums)) {
            throw new \Exception("Album already exists");
        }

        $this->albums[] = $album;
    }

    public function getAlbums(): array
    {
        return $this->albums;
    }
}
