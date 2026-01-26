<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function getIntArray(): array {
    return array_map('intval', explode(' ', getLine()));
}

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

// Main
function solve(): void {
    [$x, $y] = getIntArray();
    printResult(intdiv($y, $x));
}

solve();
