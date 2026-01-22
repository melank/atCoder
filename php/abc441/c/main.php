<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function getInt(): int {
    return (int) getLine();
}

function getArray(): array {
    return explode(' ', getLine());
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
    [$n, $k, $x] = getArray();
    $n = (int)$n;
    $k = (int)$k;
    $x = (int)$x;
    $a = getIntArray();

    // 降順ソート（大きい順）
    rsort($a);

    $sum = 0;
    for ($i = $n - $k; $i < $n; $i++) {
        $sum += $a[$i];
        if ($sum >= $x) {
            printResult($i + 1);
            return;
        }
    }

    printResult(-1);
}

solve();
