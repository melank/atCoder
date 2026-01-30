<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function readInt(): int {
    return (int) getLine();
}

function getArray(): array {
    return explode(' ', getLine());
}

function readIntArray(): array {
    return array_map('intval', explode(' ', getLine()));
}

function readLines(int $n): array {
    $lines = [];
    for ($i = 0; $i < $n; $i++) {
        $lines[] = getLine();
    }
    return $lines;
}

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

function printFormattedResult(int|float|string $result, int $digit): void
{
    printf("%." . $digit . "f\n", $result);
}

/**
 * 指定した小数点以下の桁数で出力する
 */
function printFloat(float $value, int $precision = 1): void
{
    printf("%." . $precision . "f\n", $value);
}

/**
 * 各位置について、その位置以外のすべての要素の積を求める
 * @param array $nums 整数配列
 * @return array 自分以外の積の配列
 */
function solution(array $nums): array {
    $count = count($nums);

    // prefix[i] = nums[0] * nums[1] * ... * nums[i-1] (iより左の累積積)
    $prefix = array_fill(0, $count, 1);
    for ($i = 1; $i < $count; $i++) {
        $prefix[$i] = $prefix[$i - 1] * $nums[$i - 1];
    }

    // suffix[i] = nums[i+1] * nums[i+2] * ... * nums[n-1] (iより右の累積積)
    $suffix = array_fill(0, $count, 1);
    for ($i = $count - 2; $i >= 0; $i--) {
        $suffix[$i] = $suffix[$i + 1] * $nums[$i + 1];
    }

    // answer[i] = prefix[i] * suffix[i]
    $results = [];
    for ($i = 0; $i < $count; $i++) {
        $results[] = $prefix[$i] * $suffix[$i];
    }

    return $results;
}

// Main
function solve(): void {
    $n = readInt();
    $nums = readIntArray();

    $result = solution($nums);
    printResult(implode(' ', $result));
}

// テストから呼ばれる場合は実行しない
if (php_sapi_name() !== 'cli' || !isset($GLOBALS['TESTING'])) {
    solve();
}
