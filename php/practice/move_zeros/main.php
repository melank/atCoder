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
 * 配列内の0をすべて末尾に移動する（0以外の相対順序は保持）
 * @param array $nums 整数配列（参照渡しでその場修正）
 * @return void
 */
function solution(array &$nums): void {
    $count = count($nums);
    $cursor = 0;
    // 0以外の要素を前に詰める
    for ($i = 0; $i < $count; $i++) {
        if ($nums[$i] !== 0) {
            $nums[$cursor] = $nums[$i];
            $cursor++;
        }
    }

    // 残りを0で埋める
    for ($i = $cursor; $i < $count; $i++) {
        $nums[$i] = 0;
    }
}

// Main
function solve(): void {
    $n = readInt();
    $nums = readIntArray();

    solution($nums);
    printResult(implode(' ', $nums));
}

// テストから呼ばれる場合は実行しない
if (php_sapi_name() !== 'cli' || !isset($GLOBALS['TESTING'])) {
    solve();
}
