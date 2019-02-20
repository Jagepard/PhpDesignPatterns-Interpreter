## Table of contents

- [\Behavioral\Interpreter\InterpreterInterface (interface)](#interface-behavioralinterpreterinterpreterinterface)
- [\Behavioral\Interpreter\Album](#class-behavioralinterpreteralbum)
- [\Behavioral\Interpreter\Interpreter](#class-behavioralinterpreterinterpreter)
- [\Behavioral\Interpreter\ItemInterface (interface)](#interface-behavioralinterpreteriteminterface)
- [\Behavioral\Interpreter\Depository](#class-behavioralinterpreterdepository)
- [\Behavioral\Interpreter\DepositoryInterface (interface)](#interface-behavioralinterpreterdepositoryinterface)

<hr />

### Interface: \Behavioral\Interpreter\InterpreterInterface

> Interface InterpreterInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>interpret(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Interpreter\Album

> Class Album

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$name</strong>, <em>\string</em> <strong>$author</strong>)</strong> : <em>void</em><br /><em>Album constructor.</em> |
| public | <strong>getAuthor()</strong> : <em>string</em> |
| public | <strong>getName()</strong> : <em>string</em> |

*This class implements [\Behavioral\Interpreter\ItemInterface](#interface-behavioralinterpreteriteminterface)*

<hr />

### Class: \Behavioral\Interpreter\Interpreter

> Class Interpreter

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Interpreter\DepositoryInterface](#interface-behavioralinterpreterdepositoryinterface)</em> <strong>$depository</strong>)</strong> : <em>void</em><br /><em>Interpreter constructor.</em> |
| public | <strong>getDepository()</strong> : <em>[\Behavioral\Interpreter\DepositoryInterface](#interface-behavioralinterpreterdepositoryinterface)</em> |
| public | <strong>interpret(</strong><em>\string</em> <strong>$input=null</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Interpreter\InterpreterInterface](#interface-behavioralinterpreterinterpreterinterface)*

<hr />

### Interface: \Behavioral\Interpreter\ItemInterface

> Interface ItemInterface

| Visibility | Function |
|:-----------|:---------|

<hr />

### Class: \Behavioral\Interpreter\Depository

> Class Depository

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getItem(</strong><em>int/\integer</em> <strong>$value</strong>)</strong> : <em>[\Behavioral\Interpreter\ItemInterface](#interface-behavioralinterpreteriteminterface)</em> |
| public | <strong>setItem(</strong><em>[\Behavioral\Interpreter\ItemInterface](#interface-behavioralinterpreteriteminterface)</em> <strong>$item</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Interpreter\DepositoryInterface](#interface-behavioralinterpreterdepositoryinterface)*

<hr />

### Interface: \Behavioral\Interpreter\DepositoryInterface

> Interface DepositoryInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getItem(</strong><em>int/\integer</em> <strong>$value</strong>)</strong> : <em>[\Behavioral\Interpreter\ItemInterface](#interface-behavioralinterpreteriteminterface)</em> |
| public | <strong>setItem(</strong><em>[\Behavioral\Interpreter\ItemInterface](#interface-behavioralinterpreteriteminterface)</em> <strong>$item</strong>)</strong> : <em>void</em> |

