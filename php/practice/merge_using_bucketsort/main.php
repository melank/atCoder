<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

const MAX_VALUE = 10000;

/**
 * 区間マージ（バケットソート版）
 * 値の範囲が限定されている場合に O(N + K) で解ける
 *
 * @param int[][] $intervals 間隔の配列
 * @return int[][] マージ後の間隔
 */
function solution(array &$intervals): array {
    if (count($intervals) <= 1) {
        return $intervals;
    }

    // バケット: start の値ごとに区間を格納
    // array_fill で事前に容量を確保（各要素を `[]` で初期化）
    $buckets = array_fill(0, MAX_VALUE + 1, []);

    foreach ($intervals as $interval) {
        $buckets[$interval[0]][] = $interval;
    }

    // バケットから順に取り出してマージ
    $merged = [];

    for ($i = 0; $i <= MAX_VALUE; $i++) {
        if (empty($buckets[$i])) {
            continue;
        }

        // 同じ start を持つ区間が複数ある場合、end でソート
        if (count($buckets[$i]) > 1) {
            usort($buckets[$i], fn($a, $b) => $a[1] <=> $b[1]);
        }

        foreach ($buckets[$i] as $interval) {
            if (empty($merged)) {
                $merged[] = $interval;
            } else {
                $lastIndex = count($merged) - 1;
                if ($interval[0] <= $merged[$lastIndex][1]) {
                    $merged[$lastIndex][1] = max($merged[$lastIndex][1], $interval[1]);
                } else {
                    $merged[] = $interval;
                }
            }
        }
    }

    return $merged;
}
