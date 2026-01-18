<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 重複する間隔をマージして返す
 *
 * @param int[][] $intervals 間隔の配列 [[start, end], ...]
 * @return int[][] マージ後の間隔の配列
 */
function solution(array $intervals): array {
    // 空配列の場合はそのまま返す
    if (count($intervals) === 0) {
        return [];
    }

    // 開始点（start）でソート
    usort($intervals, function ($a, $b) {
        return $a[0] <=> $b[0];
    });

    $merged = [$intervals[0]];

    for ($i = 1; $i < count($intervals); $i++) {
        $current = $intervals[$i];
        $lastIndex = count($merged) - 1;

        if ($current[0] <= $merged[$lastIndex][1]) {
            // 重複あり → $merged の最後の要素を直接更新
            $merged[$lastIndex][1] = max($merged[$lastIndex][1], $current[1]);
        } else {
            // 重複なし → そのまま追加
            $merged[] = $current;
        }
    }
    return $merged;
}
