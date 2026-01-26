<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function getInt(): int {
    return (int) getLine();
}

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

// Main
function solve(): void {
    $n = getInt();
    $min = getInt();
    for ($i = 1; $i < $n; $i++) {
        $min = min(getInt(), $min);
    }
    printResult($min);
}

solve();
