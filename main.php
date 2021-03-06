<?php

namespace Behavioral\Interpreter;

require_once "vendor/autoload.php";

$cardFile = new CardFile();
$cardFile->addAlbum(new Album("Korn", "Untouchables"));
$cardFile->addAlbum(new Album("Deftones", "Adrenaline"));

$interpreter = new Interpreter($cardFile);

try {
    printResult($interpreter->interpret("album 2"));
    printResult($interpreter->interpret("album author 2"));
    printResult($interpreter->interpret("album author 1"));
    printResult($interpreter->interpret("author 1"));
} catch (\Exception $e) {
    printf("%s", "Caught exception: " . $e->getMessage() . "\n");
}

function printResult(array $dataArray): void {
    foreach ($dataArray as $item) {
        print "$item ";
    }

    print "\n";
}
