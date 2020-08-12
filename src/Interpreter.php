<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

class Interpreter implements InterpreterInterface
{
    private array $registryData;

    public function __construct(RegistryInterface $registry)
    {
        $this->registryData = $registry->getData();
    }

    public function interpret(string $input): array
    {
        $input = explode(' ', $input);

        foreach ($input as $value) {
            if (is_numeric($value)) {
                return $this->getDataFromRegistry($input, $this->registryData[$value - 1]);
            }
        }

        throw new \InvalidArgumentException("No id specified");
    }

    private function getDataFromRegistry(array $input, AlbumInterface $item): array
    {
        $dataArray = [];

        foreach ($input as $value) {
            if ($value === "author") {
                $dataArray["author"] = $item->getAuthor();
            }

            if ($value === "album") {
                $dataArray["album"] = $item->getAlbum();
            }
        }

        return $dataArray;
    }
}
