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
 * 各リクエストについて、過去3000ミリ秒以内のリクエスト数を返す
 * @param array $timestamps タイムスタンプの配列（昇順）
 * @return array 各リクエストに対するカウントの配列
 */
function solution(array $timestamps): array {

    $count = count($timestamps);
    if ($count === 0) {
        return [];
    }

    $result[] = 1;
    for ($i = 1; $i < $count; $i++){
        $cnt = 0;
        for ($j = 0; $j <= $i; $j++) {
            // 3000ms以内だったら
            if ($timestamps[$i] - $timestamps[$j] <= 3000)  {
                $cnt++;
            }
        }
        $result[] = $cnt;
    }

    return $result;
}

// Main
function solve(): void {
    $n = readInt();
    $timestamps = [];
    for ($i = 0; $i < $n; $i++) {
        $timestamps[] = readInt();
    }

    $result = solution($timestamps);
    printResult(implode(' ', $result));
}

// テストから呼ばれる場合は実行しない
if (php_sapi_name() !== 'cli' || !isset($GLOBALS['TESTING'])) {
    solve();
}
