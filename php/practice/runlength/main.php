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
 * 文字列をランレングス圧縮する
 * @param string $s 入力文字列（英小文字のみ）
 * @return string 圧縮後の文字列
 */
function solution(string $s): string {
    $len = strlen($s);
    if ($len === 0) {
        return '';
    }

    $result = [];
    $cnt = 1;

    for ($i = 1; $i < $len; $i++) {
        if ($s[$i] !== $s[$i - 1]) {
            $result[] = $s[$i - 1] . $cnt;
            $cnt = 1;
        } else {
            $cnt++;
        }
    }
    $result[] = $s[$len - 1] . $cnt;

    return implode('', $result);
}

// Main
function solve(): void {
    $s = getLine();
    $result = solution($s);
    printResult($result);
}

// テストから呼ばれる場合は実行しない
if (php_sapi_name() !== 'cli' || !isset($GLOBALS['TESTING'])) {
    solve();
}
