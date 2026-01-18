<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 和がkになる連続部分配列の個数を返す
 *
 * @param array $nums 整数配列
 * @param int $k 目標の和
 * @return int 条件を満たす部分配列の個数
 */
function solution(array $nums, int $k): int {
    $count = 0;
    $prefixSum = 0;
    $map = [0 => 1];  // prefixSum = 0 が1回出現したとみなす

    foreach ($nums as $num) {
        $prefixSum += $num;

        // prefixSum - k が過去に出現していれば、その回数だけ条件を満たす部分配列がある
        $count += $map[$prefixSum - $k] ?? 0;

        // 現在の prefixSum の出現回数を記録
        $map[$prefixSum] = ($map[$prefixSum] ?? 0) + 1;
    }

    return $count;
}
