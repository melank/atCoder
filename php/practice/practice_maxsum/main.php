<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function readInt(): int {
    return (int) readLine();
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

/**
 * 指定した小数点以下の桁数で出力する
 */
function printFloat(float $value, int $precision = 1): void
{
    printf("%." . $precision . "f\n", $value);
}

/**
 * 部分配列の最大和を求める（カデンのアルゴリズム）
 */
function solve(array $input): int {
    if (count($input) === 1) {
        return $input[0];
    }

    // $dp[$i] = 位置 $i で終わる部分配列の最大和
    $dp = [];
    $dp[0] = $input[0];

    for ($i = 1; $i < count($input); $i++) {
        // 新しく始めるか、前の部分配列に追加するか
        $dp[$i] = max($input[$i], $dp[$i - 1] + $input[$i]);
    }

    return max($dp);
}

// テスト用のエイリアス
function solution(array $nums): int {
    return solve($nums);
}
