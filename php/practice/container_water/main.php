<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 貯められる水の最大量を返す
 *
 * @param int[] $height 各線の高さ
 * @return int 最大水量
 */
function solution(array $height): int {
    $n = count($height);

    $left = 0;
    $right = $n - 1;

    if ($n === 2) {
        return min($height[$left], $height[$right]);
    }

    $max = 0;

    while ($left !== $right) {
        $max = max($max, min($height[$left], $height[$right]) * ($right - $left));
        print_r($max);
        // 低いほうを左右に移動
        $height[$left] <= $height[$right] ? ++$left : --$right;
    }
    return $max;
}
