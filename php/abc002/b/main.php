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
    // Write your solution here
    $w = getLine();
    // 母音を取り除く
    $result = str_replace(['a', 'e', 'i', 'o', 'u'], '', $w);
    printResult($result);
}

solve();
