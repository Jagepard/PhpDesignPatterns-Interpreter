<?php

namespace Behavioral\Interpreter;

require_once "vendor/autoload.php";

$cardFile = new CardFile();
$cardFile->addAlbum(new Album("Korn", "Untouchables"));
$cardFile->addAlbum(new Album("Deftones", "Adrenaline"));

$interpreter = new Interpreter($cardFile);

try {
    print($interpreter->interpret("album 2"));
    print($interpreter->interpret("album author 2"));
    print($interpreter->interpret("album author 1"));
    print($interpreter->interpret("author 1"));
} catch (\Exception $e) {
    printf("%s", "Caught exception: " . $e->getMessage() . "\n");
}
