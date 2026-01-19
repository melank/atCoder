<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * n番目のフィボナッチ数を返す
 *
 * @param int $n 0以上の整数
 * @return int n番目のフィボナッチ数
 */
function solution(int $n): int {
    if ($n <= 1) {
        return $n;
    }

    $prev2 = 0;
    $prev1 = 1;

    for ($i = 2; $i <= $n; $i++) {
        $curr = $prev1 + $prev2;
        $prev2 = $prev1;
        $prev1 = $curr;
    }

    return $prev1;
}
