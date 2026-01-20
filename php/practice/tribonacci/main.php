<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * n番目のトリボナッチ数を返す
 *
 * @param int $n 0以上の整数
 * @return int n番目のトリボナッチ数
 */
function solution(int $n): int {
    $dp = [0, 1, 1];
    for ($i = 3; $i <= $n; $i++) {
        $dp[] = $dp[$i-1] + $dp[$i-2] + $dp[$i-3];
    }
    return  $dp[$n];
}
