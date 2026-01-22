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

    // 30回で元に戻るので、N mod 30 回だけ操作
    $n = $n % 30;

    $cards = [1, 2, 3, 4, 5, 6];

    for ($i = 0; $i < $n; $i++) {
        $pos = $i % 5;  // 0-indexed: 位置 pos と pos+1 を入れ替え
        [$cards[$pos], $cards[$pos + 1]] = [$cards[$pos + 1], $cards[$pos]];
    }

    printResult(implode('', $cards));
}

solve();
