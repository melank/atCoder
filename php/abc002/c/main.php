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

/**
 * 指定した小数点以下の桁数で出力する
 */
function printFloat(float $value, int $precision = 1): void {
    printf("%." . $precision . "f\n", $value);
}

function calcTriangle(int $xa, int $ya, int $xb, int $yb, int $xc, int $yc): float {
    // 3 点 (0,0), (a,b), (c,d) で構成される三角形の面積は、
    // ∣ad−bc∣/2 でもとめられる。
    $xb -= $xa;
    $yb -= $ya;
    $xc -= $xa;
    $yc -= $ya;
    return abs($xb * $yc - $yb * $xc) / 2.0;
}

// Main
function solve(): void {
    // Write your solution here
    [$xa, $ya, $xb, $yb, $xc, $yc] = getIntArray();
    printFloat(calcTriangle($xa, $ya, $xb, $yb, $xc, $yc), 1);
}

solve();
