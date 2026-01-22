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

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

// Main
function solve(): void {
    [$n, $m] = getIntArray();
    $s = str_split(getLine());
    $t = str_split(getLine());
    $ds = array_unique(array_diff($s, $t));
    $dt = array_unique(array_diff($t, $s));
    $q = getInt();

    for ($i = 0; $i < $q; $i++) {
        $w = str_split(getLine());
        if (count(array_intersect($w, $ds)) > 0 && count(array_intersect($w, $dt)) === 0) {
            printResult('Takahashi');
        } else if (count(array_intersect($w, $dt)) > 0 && count(array_intersect($w, $ds)) === 0) {
            printResult('Aoki');
        } else {
            printResult('Unknown');
        }
    }
}

solve();
