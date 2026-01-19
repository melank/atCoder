<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 必要な会議室の最小数を求める
 *
 * @param int[][] $intervals 会議の時間帯 [[start, end], ...]
 * @return int 必要な会議室数
 */
function solution(array $intervals): int {
    if (empty($intervals)) {
        return 0;
    }

    // イベントを作成: [時刻, 種別] （種別: -1=終了, +1=開始）
    $events = [];
    foreach ($intervals as [$start, $end]) {
        $events[] = [$start, 1];   // 開始
        $events[] = [$end, -1];    // 終了
    }

    // 時刻でソート（同時刻なら終了を先に処理）
    usort($events, function ($a, $b) {
        if ($a[0] !== $b[0]) {
            return $a[0] <=> $b[0];
        }
        return $a[1] <=> $b[1];  // -1（終了）が +1（開始）より先
    });

    // イベントを順に処理して最大同時使用数を求める
    $current = 0;
    $maxRooms = 0;

    foreach ($events as [$time, $delta]) {
        $current += $delta;
        $maxRooms = max($maxRooms, $current);
    }

    return $maxRooms;
}
