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

    /**
     * Adds an album to the card index
     * -------------------------------
     * Добавляет альбом в картотеку
     *
     * @param  AlbumInterface $item
     * @return void
     */
    public function addAlbum(AlbumInterface $item): void
    {
        $this->data[] = $item;
    }

    /**
     * Recalls the entire $data
     * ------------------------
     * Вызывает всю картотеку
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
