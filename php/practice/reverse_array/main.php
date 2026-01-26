<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function readInt(): int {
    return (int) readLine();
}

function getArray(): array {
    return explode(' ', readLine());
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
 * 配列を反転（逆順に並び替え）する
 *
 * @param array $nums 整数配列
 * @return array 反転された配列
 */
function solution(array $nums): array {
    return array_reduce($nums, function ($carry) use (&$nums) {
        $carry[] = array_pop($nums);
        return $carry;
    }, []);
}
