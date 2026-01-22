<?php

/**
 * 数学ヘルパー関数
 */

/**
 * 最大公約数（GCD）
 * @param int $a
 * @param int $b
 * @return int
 */
function gcd(int $a, int $b): int {
    return $b === 0 ? $a : gcd($b, $a % $b);
}

/**
 * 最小公倍数（LCM）
 * @param int $a
 * @param int $b
 * @return int
 */
function lcm(int $a, int $b): int {
    return intdiv($a * $b, gcd($a, $b));
}

/**
 * 配列の最大公約数
 * @param array $arr
 * @return int
 */
function gcdArray(array $arr): int {
    return array_reduce($arr, fn($carry, $item) => gcd($carry, $item), $arr[0]);
}

/**
 * 配列の最小公倍数
 * @param array $arr
 * @return int
 */
function lcmArray(array $arr): int {
    return array_reduce($arr, fn($carry, $item) => lcm($carry, $item), 1);
}

/**
 * 素数判定
 * @param int $n
 * @return bool
 */
function isPrime(int $n): bool {
    if ($n < 2) return false;
    if ($n === 2) return true;
    if ($n % 2 === 0) return false;
    for ($i = 3; $i * $i <= $n; $i += 2) {
        if ($n % $i === 0) return false;
    }
    return true;
}

/**
 * 素因数分解
 * @param int $n
 * @return array [素因数 => 指数] の連想配列
 */
function primeFactorize(int $n): array {
    $factors = [];
    for ($i = 2; $i * $i <= $n; $i++) {
        while ($n % $i === 0) {
            $factors[$i] = ($factors[$i] ?? 0) + 1;
            $n = intdiv($n, $i);
        }
    }
    if ($n > 1) {
        $factors[$n] = 1;
    }
    return $factors;
}

/**
 * 約数列挙
 * @param int $n
 * @return array
 */
function divisors(int $n): array {
    $divs = [];
    for ($i = 1; $i * $i <= $n; $i++) {
        if ($n % $i === 0) {
            $divs[] = $i;
            if ($i !== intdiv($n, $i)) {
                $divs[] = intdiv($n, $i);
            }
        }
    }
    sort($divs);
    return $divs;
}

/**
 * 累乗（mod付き）
 * @param int $base
 * @param int $exp
 * @param int $mod
 * @return int
 */
function modPow(int $base, int $exp, int $mod): int {
    $result = 1;
    $base %= $mod;
    while ($exp > 0) {
        if ($exp % 2 === 1) {
            $result = ($result * $base) % $mod;
        }
        $exp = intdiv($exp, 2);
        $base = ($base * $base) % $mod;
    }
    return $result;
}
