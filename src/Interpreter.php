<?php

declare(strict_types=1);

namespace Behavioral\Interpreter;

class Interpreter implements InterpreterInterface
{
    public function __construct(private CardFile $cardFile) {}

    /**
     * Interpret the request according to the incoming string
     * -------------------------------------------------------
     * Инерпретирует запрос в соответствии со входящей строкой
     *
     * @param  string $inputString
     * @return string
     */
    public function interpret(string $inputString): string
    {
        $output = [];

        if (preg_match('~[0-9]+~', $inputString, $match)) {
            $index = $match[0] - 1;
        } else {
            throw new \InvalidArgumentException("Неверный запрос. Введите 'album 2' или '3 author'.");
        }

        $parts  = explode(' ', $inputString);
        $albums = $this->cardFile->getAlbums();

        if (!isset($albums[$index])) {
            throw new \InvalidArgumentException("Альбом с индексом {$match[0]} не найден. Всего доступно: " . count($albums));
        }

        $album = $albums[$index];

        foreach ($parts as $part) {
            if ($part === 'album') {
                $output[] = sprintf("Album: %s", $album->getAlbum());  
            }

            if ($part === 'author') {
                $output[] = sprintf("Author: %s", $album->getAuthor());  
            }
        }

        return implode(', ', $output) . PHP_EOL;
    }
}
