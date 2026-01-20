<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 隣り合う家から連続して盗まずに得られる最大金額を返す
 *
 * @param int[] $nums 各家の金額
 * @return int 盗める最大金額
 */
function solution(array $nums): int {
    $count = count($nums);
    // 1軒しかないので、それを盗む
    if ($count === 1) {
        return $nums[0];
    }

    $dp = [$nums[0], max($nums[0], $nums[1])];
    for ($i = 2; $i < $count; $i++) {
        $dp[$i] = max($dp[$i-2] + $nums[$i], $dp[$i-1]);
    }
    return max($dp);
}
