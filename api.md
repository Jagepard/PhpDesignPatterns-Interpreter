## Table of contents

- [\Behavioral\Interpreter\Album](#class-behavioralinterpreteralbum)
- [\Behavioral\Interpreter\AlbumInterface (interface)](#interface-behavioralinterpreteralbuminterface)
- [\Behavioral\Interpreter\CardFile](#class-behavioralinterpretercardfile)
- [\Behavioral\Interpreter\Interpreter](#class-behavioralinterpreterinterpreter)
- [\Behavioral\Interpreter\InterpreterInterface (interface)](#interface-behavioralinterpreterinterpreterinterface)
- [\Behavioral\Interpreter\RegistryInterface (interface)](#interface-behavioralinterpreterregistryinterface)

<hr />

### Class: \Behavioral\Interpreter\Album

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$author</strong>, <em>\string</em> <strong>$album</strong>)</strong> : <em>void</em><br /><em>Album constructor.</em> |
| public | <strong>getAlbum()</strong> : <em>string</em> |
| public | <strong>getAuthor()</strong> : <em>string</em> |

*This class implements [\Behavioral\Interpreter\AlbumInterface](#interface-behavioralinterpreteralbuminterface)*

<hr />

### Interface: \Behavioral\Interpreter\AlbumInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAlbum()</strong> : <em>string</em> |
| public | <strong>getAuthor()</strong> : <em>string</em> |

<hr />

### Class: \Behavioral\Interpreter\CardFile

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addAlbum(</strong><em>[\Behavioral\Interpreter\AlbumInterface](#interface-behavioralinterpreteralbuminterface)</em> <strong>$item</strong>)</strong> : <em>void</em> |
| public | <strong>getData()</strong> : <em>array</em> |

*This class implements [\Behavioral\Interpreter\RegistryInterface](#interface-behavioralinterpreterregistryinterface)*

<hr />

### Class: \Behavioral\Interpreter\Interpreter

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Interpreter\RegistryInterface](#interface-behavioralinterpreterregistryinterface)</em> <strong>$registry</strong>)</strong> : <em>void</em> |
| public | <strong>interpret(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>array</em> |

*This class implements [\Behavioral\Interpreter\InterpreterInterface](#interface-behavioralinterpreterinterpreterinterface)*

<hr />

### Interface: \Behavioral\Interpreter\InterpreterInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>interpret(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>array</em> |

<hr />

### Interface: \Behavioral\Interpreter\RegistryInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getData()</strong> : <em>array</em> |

