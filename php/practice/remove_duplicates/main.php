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
 * ソート済み配列から重複を削除する
 *
 * @param array $nums 昇順にソートされた整数配列
 * @return array 重複を削除した配列
 */
function solution(array &$nums): array {
    // TODO: ここに解答を実装してください
    $next = -1;
    $cursor = 0;
    foreach ($nums as $n) {
        if ($next === $n) {
            array_splice($nums, $cursor, 1);
            continue;
        }
        $next = $n;
        $cursor++;
    }

    return $nums;
}
