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
    [$p, $q] = getIntArray();
    [$x, $y] = getIntArray();



    if (($p <= $x && $x <= $p + 99) && ($q <= $y && $y <= $q + 99)) {
        printResult('Yes');
        return;
    }

    printResult('No');
}

solve();
