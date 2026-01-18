<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 頂上に到達するための最小コストを返す
 *
 * @param int[] $cost 各段のコスト
 * @return int 最小コスト
 */
function solution(array $cost): int {
    $n = count($cost);

    if ($n === 1) {
        return 0;
    }

    $prev2 = $cost[0];  // dp[i-2]
    $prev1 = $cost[1];  // dp[i-1]

    for ($i = 2; $i < $n; $i++) {
        $current = min($prev1, $prev2) + $cost[$i];
        $prev2 = $prev1;
        $prev1 = $current;
    }

    return min($prev1, $prev2);
}
