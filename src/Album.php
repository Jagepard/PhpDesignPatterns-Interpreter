<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Interpreter;

/**
 * Class Album
 * @package Behavioral\Interpreter
 */
class Album implements ItemInterface
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $author;

    /**
     * Album constructor.
     * @param string $name
     * @param string $author
     */
    public function __construct(string $name, string $author)
    {
        $this->name   = $name;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getAlbum(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
}
