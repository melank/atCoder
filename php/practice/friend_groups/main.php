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
 * 友達グループの数を求める
 *
 * @param int $n 生徒の人数
 * @param array $edges 友達関係の配列 [[a1, b1], [a2, b2], ...]
 * @return int グループの数
 */
function solution(int $n, array $edges): int {
    // TODO: ここに解答を実装してください
    return 0;
}
