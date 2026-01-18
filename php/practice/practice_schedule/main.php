<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function readInt(): int {
    return (int) readLine();
}

function readIntArray(): array {
    return array_map('intval', explode(' ', readLine()));
}

function readLines(int $n): array {
    $lines = [];
    for ($i = 0; $i < $n; $i++) {
        $lines[] = readLine();
    }
    return $lines;
}

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 指定した小数点以下の桁数で出力する
 */
function printFloat(float $value, int $precision = 1): void
{
    printf("%." . $precision . "f\n", $value);
}

// Main
function solve(): void {
    // Write your solution here
}

solve();
