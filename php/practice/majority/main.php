<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 過半数を占める要素を求める
 *
 * @param int[] $nums 整数配列
 * @return int 過半数要素
 */
function solution(array $nums): int {

    return array_search(max($counts = array_count_values($nums)), $counts);
}
