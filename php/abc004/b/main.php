<?php

function readMatrix(int $rows): array {
    $matrix = [];
    for ($i = 0; $i < $rows; $i++) {
        $matrix[] = explode(' ', trim(fgets(STDIN)));
    }
    return $matrix;
}

function printMatrix(array $matrix): void {
    foreach ($matrix as $row) {
        echo implode(' ', $row) . "\n";
    }
}

function rotate180(array $matrix): array {
    return array_map('array_reverse', array_reverse($matrix));
}

// Main
function solve(): void {
    $mat = readMatrix(4);
    printMatrix(rotate180($mat));
}

solve();
