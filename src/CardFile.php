<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

final class CardFile implements RegistryInterface
{
    private array $data;

    /**
     * @param  AlbumInterface  $item
     */
    public function addAlbum(AlbumInterface $item): void
    {
        $this->data[] = $item;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
