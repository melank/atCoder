<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 区間マージ（メモリ効率改善版）
 * 参照渡しで配列のコピーを避ける
 *
 * @param int[][] $intervals 間隔の配列（参照渡し）
 * @return int[][] マージ後の間隔
 */
function solution(array &$intervals): array {
    if (count($intervals) <= 1) {
        return $intervals;
    }

    usort($intervals, fn($a, $b) => $a[0] <=> $b[0]);

    $merged = [$intervals[0]];

    for ($i = 1; $i < count($intervals); $i++) {
        $lastIndex = count($merged) - 1;

        if ($intervals[$i][0] <= $merged[$lastIndex][1]) {
            $merged[$lastIndex][1] = max($merged[$lastIndex][1], $intervals[$i][1]);
        } else {
            $merged[] = $intervals[$i];
        }
    }

    return $merged;
}

/**
 * 2つのソート済み区間リストを統合する
 * Two Pointers で O(N + M)
 *
 * @param int[][] $a ソート済み区間リスト
 * @param int[][] $b ソート済み区間リスト
 * @return int[][] 統合後のマージ済み区間リスト
 */
function mergeTwoLists(array $a, array $b): array {
    if (empty($a)) return $b;
    if (empty($b)) return $a;

    $merged = [];
    $i = 0;
    $j = 0;

    // 2つのリストをマージしながら走査
    while ($i < count($a) || $j < count($b)) {
        // 次に処理する区間を選択
        if ($j >= count($b) || ($i < count($a) && $a[$i][0] <= $b[$j][0])) {
            $current = $a[$i];
            $i++;
        } else {
            $current = $b[$j];
            $j++;
        }

        // マージ処理
        if (empty($merged)) {
            $merged[] = $current;
        } else {
            $lastIndex = count($merged) - 1;
            if ($current[0] <= $merged[$lastIndex][1]) {
                $merged[$lastIndex][1] = max($merged[$lastIndex][1], $current[1]);
            } else {
                $merged[] = $current;
            }
        }
    }

    return $merged;
}

/**
 * 区間マージ（分割統治法）
 * 並列化可能なアプローチ
 *
 * @param int[][] $intervals 間隔の配列
 * @return int[][] マージ後の間隔
 */
function solutionDivideAndConquer(array $intervals): array {
    $n = count($intervals);

    // ベースケース
    if ($n === 0) {
        return [];
    }
    if ($n === 1) {
        return $intervals;
    }

    // 分割
    $mid = intdiv($n, 2);
    $left = array_slice($intervals, 0, $mid);
    $right = array_slice($intervals, $mid);

    // 再帰的にマージ
    $leftMerged = solutionDivideAndConquer($left);
    $rightMerged = solutionDivideAndConquer($right);

    // 2つの結果を統合
    return mergeTwoLists($leftMerged, $rightMerged);
}
