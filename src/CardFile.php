<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

final class CardFile implements RegistryInterface
{
    private array $data;

    public function addAlbum(AlbumInterface $item): void
    {
        $this->data[] = $item;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
