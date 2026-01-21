<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * x の平方根の整数部分を返す
 *
 * @param int $x 非負整数
 * @return int 平方根の整数部分
 */
function solution(int $x): int {
    $left = 0;
    $right = $x;
    $ans = 0;

    while ($left <= $right) {
        $mid = intdiv($left + $right, 2);
        if ($mid ** 2 <= $x) {
            $ans = $mid;        // 答え候補を更新
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $ans;
}
