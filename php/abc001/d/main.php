<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function getInt(): int {
    return (int) getLine();
}

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

/**
 * HHMM形式の時刻を分に変換
 */
function toMinutes(string $time): int {
    $h = (int) substr($time, 0, 2);
    $m = (int) substr($time, 2, 2);
    return $h * 60 + $m;
}

/**
 * 分をHHMM形式に変換
 */
function toTimeStr(int $minutes): string {
    $h = intdiv($minutes, 60);
    $m = $minutes % 60;
    return sprintf('%02d%02d', $h, $m);
}

/**
 * 開始時刻を5分単位に切り捨て
 */
function roundDownStart(int $minutes): int {
    return intdiv($minutes, 5) * 5;
}

/**
 * 終了時刻を5分単位に切り上げ
 */
function roundUpEnd(int $minutes): int {
    return (int) ceil($minutes / 5) * 5;
}

// Main
function solve(): void {
    $n = getInt();
    $intervals = [];

    // 入力を読み込み、5分単位に丸める
    for ($i = 0; $i < $n; $i++) {
        $line = getLine();
        [$start, $end] = explode('-', $line);
        $startMin = roundDownStart(toMinutes($start));
        $endMin = roundUpEnd(toMinutes($end));
        $intervals[] = [$startMin, $endMin];
    }

    // 開始時刻でソート
    usort($intervals, fn($a, $b) => $a[0] <=> $b[0]);

    // 区間をマージ
    $merged = [];
    foreach ($intervals as [$start, $end]) {
        if (empty($merged)) {
            $merged[] = [$start, $end];
        } else {
            $last = &$merged[count($merged) - 1];
            // 重なっているか隣接している場合はマージ
            if ($start <= $last[1]) {
                $last[1] = max($last[1], $end);
            } else {
                $merged[] = [$start, $end];
            }
        }
    }

    // 結果を出力
    foreach ($merged as [$start, $end]) {
        printResult(toTimeStr($start) . '-' . toTimeStr($end));
    }
}

solve();
