<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

function fib(int $n): int {
    if ($n === 0) {
        return 0;
    } else if ($n === 1) {
        return 1;
    }

    return fib($n - 2) + fib($n - 1);
}

/**
 * n番目のフィボナッチ数を返す
 *
 * @param int $n 0以上の整数
 * @return int n番目のフィボナッチ数
 */
function solution(int $n): int {
    return fib($n);
}
