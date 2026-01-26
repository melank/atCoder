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
 * 二分探索の再帰関数
 *
 * @param array $nums ソート済み配列
 * @param int $target 探したい値
 * @param int $left 探索範囲の左端
 * @param int $right 探索範囲の右端
 * @return int 見つかった場合はインデックス、見つからない場合は -1
 */
function binarySearchRecursive(array $nums, int $target, int $left, int $right): int {
    // 基底条件: 探索範囲がなくなった
    if ($left > $right) {
        return -1;
    }

    // 中央のインデックスを計算
    $mid = intdiv($left + $right, 2);

    if ($nums[$mid] === $target) {
        // 見つかった
        return $mid;
    } elseif ($nums[$mid] < $target) {
        // 右半分を再帰的に探索
        return binarySearchRecursive($nums, $target, $mid + 1, $right);
    } else {
        // 左半分を再帰的に探索
        return binarySearchRecursive($nums, $target, $left, $mid - 1);
    }
}

/**
 * ソート済み配列から target を二分探索で探す
 *
 * @param array $nums ソート済み配列
 * @param int $target 探したい値
 * @return int 見つかった場合はインデックス、見つからない場合は -1
 */
function solution(array $nums, int $target): int {
    return binarySearchRecursive($nums, $target, 0, count($nums) - 1);
}
