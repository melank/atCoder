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
    // Write your solution here
    [$a, $b] = getIntArray();
    printResult(max($a, $b));
}

solve();
