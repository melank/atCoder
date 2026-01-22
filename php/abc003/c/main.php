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
function printResult(int|float|string $result): void
{
    printf("%.6f\n", $result);
}

// Main
function solve(): void {
    [$n, $k] = getIntArray();
    $rates = getIntArray();

    if ($k === 1) {
        printResult(max($rates) / 2.0);
        return;
    }

    // 上位k件を昇順で取得
    asort($rates);
    $topK = array_splice($rates, $n - $k, $k);

    $c = array_reduce($topK, fn($c, $r) => ($c + $r) / 2.0, 0);

    printResult($c);
}

solve();
