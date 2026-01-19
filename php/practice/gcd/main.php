<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 最大公約数と最小公倍数を求める
 *
 * @param int $a 正の整数
 * @param int $b 正の整数
 * @return int[] [GCD, LCM]
 */
function solution(int $a, int $b): array {
    return [(int)gmp_gcd($a, $b), (int)gmp_lcm($a, $b)];
}
