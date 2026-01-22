<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function getInt(): int {
    return (int) getLine();
}

function getIntArray(): array {
    return array_map('intval', explode(' ', getLine()));
}

function getLines(int $n): array {
    $lines = [];
    for ($i = 0; $i < $n; $i++) {
        $lines[] = getLine();
    }
    return $lines;
}

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

// Main
function solve(): void {
    // Write your solution here
}

solve();
