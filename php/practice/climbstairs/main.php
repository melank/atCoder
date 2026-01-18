<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * n段の階段を登る方法の総数を返す
 *
 * 漸化式: dp[n] = dp[n-1] + dp[n-2]
 * - n段目に到達するには、(n-1)段目から1段登るか、(n-2)段目から2段登るしかない
 * - これはフィボナッチ数列と同じ構造
 *
 * @param int $n 階段の段数
 * @return int 登り方の総数
 */
function solution(int $n): int {
    // 基底ケース
    if ($n <= 2) {
        return $n;
    }

    // 空間最適化: 直前の2つの値だけ保持
    $prev2 = 1;  // dp[i-2]: 2つ前（1段目への登り方）
    $prev1 = 2;  // dp[i-1]: 1つ前（2段目への登り方）

    for ($i = 3; $i <= $n; $i++) {
        $current = $prev1 + $prev2;
        $prev2 = $prev1;
        $prev1 = $current;
    }

    return $prev1;
}
