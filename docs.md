## Table of contents

- [\Behavioral\Interpreter\Item](#class-behavioralinterpreteritem)
- [\Behavioral\Interpreter\Interpreter](#class-behavioralinterpreterinterpreter)
- [\Behavioral\Interpreter\Depository](#class-behavioralinterpreterdepository)

<hr />

### Class: \Behavioral\Interpreter\Item

> Class Item

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>\string</em> <strong>$author</strong>, <em>\string</em> <strong>$album</strong>)</strong> : <em>void</em><br /><em>Item constructor.</em> |
| public | <strong>getAlbum()</strong> : <em>string</em> |
| public | <strong>getAuthor()</strong> : <em>string</em> |

<hr />

### Class: \Behavioral\Interpreter\Interpreter

> Class Interpreter

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Behavioral\Interpreter\Depository](#class-behavioralinterpreterdepository)</em> <strong>$depository</strong>)</strong> : <em>void</em><br /><em>Interpreter constructor.</em> |
| public | <strong>interpret(</strong><em>\string</em> <strong>$input</strong>)</strong> : <em>void</em> |
| protected | <strong>printValue(</strong><em>array</em> <strong>$values</strong>)</strong> : <em>void</em> |
| protected | <strong>setItem(</strong><em>array</em> <strong>$values</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Interpreter\Depository

> Class Depository

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getItem(</strong><em>int/\integer</em> <strong>$value</strong>)</strong> : <em>[\Behavioral\Interpreter\Item](#class-behavioralinterpreteritem)</em> |
| public | <strong>getItems()</strong> : <em>array</em> |
| public | <strong>setItem(</strong><em>[\Behavioral\Interpreter\Item](#class-behavioralinterpreteritem)</em> <strong>$item</strong>)</strong> : <em>void</em> |

