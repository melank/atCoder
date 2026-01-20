<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 階段の一番上に到達するための最小コストを返す
 *
 * @param int[] $cost 各段のコスト
 * @return int 最小コスト
 */
function solution(array $cost): int {
    $count = count($cost);
    if ($count <= 2) {
        return min($cost);
    }
    $dp = [$cost[0], $cost[1]];
    for ($i = 2; $i < $count; $i++) {
        $dp[] = $cost[$i] + min($dp[$i-1], $dp[$i-2]);
    }

    return min($dp[$count-1], $dp[$count-2]);
}
