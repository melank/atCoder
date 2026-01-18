<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 長さkの部分配列の最大平均値を返す
 *
 * @param array $nums 整数配列
 * @param int $k 部分配列の長さ
 * @return float 最大平均値
 */
function solution(array $nums, int $k): float {
    // 最初のk個の和を計算
    $sum = array_sum(array_slice($nums, 0, $k));
    $maxSum = $sum;

    // ウィンドウをスライド（k番目から開始）
    for ($i = $k; $i < count($nums); $i++) {
        // 左端を引いて、右端を足す（O(1)で更新）
        $sum = $sum - $nums[$i - $k] + $nums[$i];
        $maxSum = max($maxSum, $sum);
    }

    return $maxSum / $k;
}
