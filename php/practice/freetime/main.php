<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 会議予定から空き時間を検出する
 *
 * @param int[][] $schedules 会議予定の配列 [[start, end], ...]
 * @return int[][] 空き時間の配列（0〜24の範囲）
 */
function solution(array $schedules): array {
    if ($schedules === [[0,24]]) {
        return [];
    } else if ($schedules === []) {
        return [[0,24]];
    }

    usort($schedules, function ($a, $b) {
        return $a[0] <=> $b[0];
    });

    $merged = [$schedules[0]];

    for ($i = 1; $i < count($schedules); $i++) {
        $current = $schedules[$i];
        $lastIndex = count($merged) - 1;

        if ($current[0] <= $merged[$lastIndex][1]) {
            // 重複あり → $merged の最後の要素を直接更新
            $merged[$lastIndex][1] = max($merged[$lastIndex][1], $current[1]);
        } else {
            // 重複なし → そのまま追加
            $merged[] = $current;
        }
    }

    $cursor = 0;
    $result = [];
    foreach ($merged as $m) {
        [$start, $end] = $m;
        if ($cursor < $start) {
            $result[] = [$cursor, $start];
        }
        $cursor = $end;
    }

    if ($cursor < 24) {
        $result[] = [$cursor, 24];
    }

    return $result;
}
