## Table of contents

- [\Behavioral\Interpreter\InterpreterInterface (interface)](#interface-behavioralinterpreterinterpreterinterface)
- [\Behavioral\Interpreter\Album](#class-behavioralinterpreteralbum)
- [\Behavioral\Interpreter\Interpreter](#class-behavioralinterpreterinterpreter)
- [\Behavioral\Interpreter\ItemInterface (interface)](#interface-behavioralinterpreteriteminterface)

<hr />

### Interface: \Behavioral\Interpreter\InterpreterInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>interpret(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Interpreter\Album

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$author</strong>)</strong> : <em>void</em><br /><em>Album constructor.</em> |
| public | <strong>getAuthor()</strong> : <em>string</em> |
| public | <strong>getName()</strong> : <em>string</em> |

*This class implements [\Behavioral\Interpreter\ItemInterface](#interface-behavioralinterpreteriteminterface)*

<hr />

### Class: \Behavioral\Interpreter\Interpreter

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addItemToRegistry(</strong><em>[\Behavioral\Interpreter\ItemInterface](#interface-behavioralinterpreteriteminterface)</em> <strong>$item</strong>)</strong> : <em>void</em> |
| public | <strong>interpret(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Interpreter\InterpreterInterface](#interface-behavioralinterpreterinterpreterinterface)*

<hr />

### Interface: \Behavioral\Interpreter\ItemInterface

| Visibility | Function |
|:-----------|:---------|

