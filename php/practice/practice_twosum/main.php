<?php

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
 * ソート済み配列から和がtargetになる2つの要素のインデックスを探す
 *
 * @param array $nums ソート済み整数配列
 * @param int $target 目標の和
 * @return array [index1, index2] または [-1, -1]
 */
function solution(array $nums, int $target): array {
    $index1 = 0;
    $index2 = count($nums) - 1;

    while (true) {
        $sum = $nums[$index1] + $nums[$index2];
        if ($sum === $target) {
            return [$index1, $index2];
        } else if ($sum > $target) {
            $index2 -= 1;
        } else {
            $index1 += 1;
        }

        if ($index1 === $index2) {
            break;
        }
    }
    return [-1, -1];
}
