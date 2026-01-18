<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * ソート済み区間リストに新しい区間を挿入してマージする
 *
 * @param int[][] $intervals ソート済みの区間リスト
 * @param int[] $newInterval 挿入する区間 [start, end]
 * @return int[][] マージ後の区間リスト
 */
function solution(array $intervals, array $newInterval): array {
    $index = 0;
    $start = $newInterval[0];
    for ($i = 0; $i < count($intervals); $i++){
        if ($start < $intervals[$i][0]) {
            break;
        }
        $index++;
    }
    array_splice($intervals, $index, 0, [$newInterval]);

    $merged = [$intervals[0]];

    for ($i = 1; $i < count($intervals); $i++) {
        $current = $intervals[$i];
        $lastIndex = count($merged) - 1;

        // current[start, end] の start より、直前の
        // $merged[start, end] の end が大きければ重複している
        if ($current[0] <= $merged[$lastIndex][1]) {
            // 重複していれば、$merged の end を大きい方に入れ替える
            // 更新されない場合、$merged が $current を完全に内包している
            $merged[$lastIndex][1] = max($merged[$lastIndex][1], $current[1]);
        } else {
            // 重複していないので、そのまま追加する
            $merged[] = $current;
        }
    }
    return $merged;
}
