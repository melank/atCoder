<?php

/**
 * 入出力ヘルパー関数
 */

/**
 * 1行読み込み
 * @return string
 */
function getLine(): string {
    return trim(fgets(STDIN));
}

/**
 * 整数を1つ読み込み
 * @return int
 */
function getInt(): int {
    return (int) getLine();
}

/**
 * スペース区切りの配列を読み込み
 * @return array
 */
function getArray(): array {
    return explode(' ', getLine());
}

/**
 * スペース区切りの整数配列を読み込み
 * @return array
 */
function getIntArray(): array {
    return array_map('intval', getArray());
}

/**
 * 複数行を読み込み
 * @param int $n 行数
 * @return array
 */
function getLines(int $n): array {
    $lines = [];
    for ($i = 0; $i < $n; $i++) {
        $lines[] = getLine();
    }
    return $lines;
}

/**
 * 結果を出力（末尾に改行）
 * @param int|float|string $result
 */
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

/**
 * 指定した小数点以下の桁数で出力
 * @param float $value
 * @param int $precision
 */
function printFloat(float $value, int $precision = 6): void {
    printf("%." . $precision . "f\n", $value);
}

/**
 * 配列を改行区切りで出力
 * @param array $arr
 */
function printLines(array $arr): void {
    foreach ($arr as $item) {
        echo $item . "\n";
    }
}

/**
 * 配列をスペース区切りで出力
 * @param array $arr
 */
function printArray(array $arr): void {
    echo implode(' ', $arr) . "\n";
}

/**
 * Yes/No を出力
 * @param bool $condition
 */
function printYesNo(bool $condition): void {
    echo ($condition ? 'Yes' : 'No') . "\n";
}
