<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

// Main
function solve(): void {
    $n = getLine();
    printResult(($n + 1) * 10000 / 2);
}

solve();
