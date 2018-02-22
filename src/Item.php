<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Interpreter;

/**
 * Class Item
 *
 * @package Behavioral\Interpreter
 */
class Item
{

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $album;

    /**
     * Item constructor.
     *
     * @param string $author
     * @param string $album
     */
    public function __construct(string $author, string $album)
    {
        $this->author = $author;
        $this->album  = $album;
    }

    /**
     * @return string
     */
    public function getAlbum(): string
    {
        return $this->album;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }
}
