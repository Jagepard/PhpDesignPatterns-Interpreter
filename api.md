## Table of contents
- [Behavioral\Interpreter\Album](#behavioral_interpreter_album)
- [Behavioral\Interpreter\CardFile](#behavioral_interpreter_cardfile)
- [Behavioral\Interpreter\Interpreter](#behavioral_interpreter_interpreter)
- [Behavioral\Interpreter\InterpreterInterface](#behavioral_interpreter_interpreterinterface)
<hr>

<a id="behavioral_interpreter_album"></a>

### Class: Behavioral\Interpreter\Album
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(string $author, string $album)`<br> |
| public | `getAlbum(): string`<br> |
| public | `getAuthor(): string`<br> |


<a id="behavioral_interpreter_cardfile"></a>

### Class: Behavioral\Interpreter\CardFile
| Visibility | Function |
|:-----------|:---------|
| public | `addAlbum(Behavioral\Interpreter\Album $album)`<br> |
| public | `getAlbums(): array`<br> |


<a id="behavioral_interpreter_interpreter"></a>

### Class: Behavioral\Interpreter\Interpreter
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(Behavioral\Interpreter\CardFile $cardFile)`<br> |
| public | `interpret(string $inputString): string`<br>Interpret the request according to the incoming string<br>-------------------------------------------------------<br>Инерпретирует запрос в соответствии со входящей строкой |


<a id="behavioral_interpreter_interpreterinterface"></a>

### Class: Behavioral\Interpreter\InterpreterInterface
| Visibility | Function |
|:-----------|:---------|
| abstract public | `interpret(string $inputString): string`<br> |
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
