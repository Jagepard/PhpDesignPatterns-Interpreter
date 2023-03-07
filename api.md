## Table of contents
- [Behavioral\Interpreter\Album](#behavioral_interpreter_album)
- [Behavioral\Interpreter\AlbumInterface](#behavioral_interpreter_albuminterface)
- [Behavioral\Interpreter\CardFile](#behavioral_interpreter_cardfile)
- [Behavioral\Interpreter\Interpreter](#behavioral_interpreter_interpreter)
- [Behavioral\Interpreter\InterpreterInterface](#behavioral_interpreter_interpreterinterface)
- [Behavioral\Interpreter\RegistryInterface](#behavioral_interpreter_registryinterface)
<hr>

<a id="behavioral_interpreter_album"></a>

### Class: Behavioral\Interpreter\Album
##### implements [Behavioral\Interpreter\AlbumInterface](#behavioral_interpreter_albuminterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $author  string $album )</em><br>Sets the author and album titles<br>Устанваливает наименования автор и альбом|
|public|<em><strong>getAuthor</strong>(): string</em><br>Gets the name of the author of the album<br>Получает наименование автора альбома|
|public|<em><strong>getAlbum</strong>(): string</em><br>Gets the title of the album<br>Получает название альбома|


<a id="behavioral_interpreter_albuminterface"></a>

### Class: Behavioral\Interpreter\AlbumInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getAuthor</strong>(): string</em><br>|
|abstract public|<em><strong>getAlbum</strong>(): string</em><br>|


<a id="behavioral_interpreter_cardfile"></a>

### Class: Behavioral\Interpreter\CardFile
##### implements [Behavioral\Interpreter\RegistryInterface](#behavioral_interpreter_registryinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>addAlbum</strong>( Behavioral\Interpreter\AlbumInterface $item ): void</em><br>Adds an album to the card index<br>Добавляет альбом в картотеку|
|public|<em><strong>getData</strong>(): array</em><br>Recalls the entire $data<br>Вызывает всю картотеку|


<a id="behavioral_interpreter_interpreter"></a>

### Class: Behavioral\Interpreter\Interpreter
##### implements [Behavioral\Interpreter\InterpreterInterface](#behavioral_interpreter_interpreterinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( Behavioral\Interpreter\RegistryInterface $registry )</em><br>Receives filing data<br>Принимает данные картотеки|
|public|<em><strong>interpret</strong>( string $input ): string</em><br>Interpret the request according to the incoming $input string<br>Инерпретирует запрос в соответствии со входящей строкой $input|


<a id="behavioral_interpreter_interpreterinterface"></a>

### Class: Behavioral\Interpreter\InterpreterInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>interpret</strong>( string $input ): string</em><br>|


<a id="behavioral_interpreter_registryinterface"></a>

### Class: Behavioral\Interpreter\RegistryInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getData</strong>(): array</em><br>|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
