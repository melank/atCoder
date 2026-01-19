<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 目標金額を作るのに必要な最小コイン枚数を求める
 *
 * @param int[] $coins コインの額面
 * @param int $amount 目標金額
 * @return int 最小コイン枚数（不可能なら-1）
 */
function solution(array $coins, int $amount): int {
    if ($amount === 0) {
        return 0;
    }

    $dp = array_fill(0, $amount + 1, $amount + 1);
    $dp[0] = 0;

    for ($i = 1; $i <= $amount; $i++) {
        foreach ($coins as $coin) {
            if ($coin <= $i) {
                $dp[$i] = min($dp[$i], $dp[$i - $coin] + 1);
            }
        }
    }

    return $dp[$amount] > $amount ? -1 : $dp[$amount];
}
