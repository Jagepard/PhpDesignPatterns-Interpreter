## Table of contents

- [\Behavioral\Interpreter\InterpreterInterface (interface)](#interface-behavioralinterpreterinterpreterinterface)
- [\Behavioral\Interpreter\AlbumInterface (interface)](#interface-behavioralinterpreteralbuminterface)
- [\Behavioral\Interpreter\Album](#class-behavioralinterpreteralbum)
- [\Behavioral\Interpreter\Interpreter](#class-behavioralinterpreterinterpreter)

<hr />

### Interface: \Behavioral\Interpreter\InterpreterInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>interpret(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em> |

<hr />

### Interface: \Behavioral\Interpreter\AlbumInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getAuthor()</strong> : <em>string</em> |
| public | <strong>getName()</strong> : <em>string</em> |

<hr />

### Class: \Behavioral\Interpreter\Album

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$author</strong>)</strong> : <em>void</em><br /><em>Album constructor.</em> |
| public | <strong>getAuthor()</strong> : <em>string</em> |
| public | <strong>getName()</strong> : <em>string</em> |

*This class implements [\Behavioral\Interpreter\AlbumInterface](#interface-behavioralinterpreteralbuminterface)*

<hr />

### Class: \Behavioral\Interpreter\Interpreter

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addAlbumToRegistry(</strong><em>[\Behavioral\Interpreter\AlbumInterface](#interface-behavioralinterpreteralbuminterface)</em> <strong>$item</strong>)</strong> : <em>void</em> |
| public | <strong>interpret(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Interpreter\InterpreterInterface](#interface-behavioralinterpreterinterpreterinterface)*

