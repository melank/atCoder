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
 * 配列を右にkステップ回転させる
 *
 * @param array $nums 整数配列
 * @param int $k 回転ステップ数
 * @return array 回転後の配列
 */
function solution(array $nums, int $k): array {
    // TODO: ここに解答を実装してください
    $count = count($nums);

    if ($k === 0) {
        return $nums;
    }

    $m = $count % $k;

    for ($i = 1; $i <= $k; $i++) {
        $p = array_pop($nums);
        array_unshift($nums, $p);
    }

    return $nums;
}
