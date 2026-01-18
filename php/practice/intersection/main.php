<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 2つの区間リストの交差部分を求める
 *
 * @param int[][] $firstList ソート済みの区間リスト
 * @param int[][] $secondList ソート済みの区間リスト
 * @return int[][] 交差部分の配列
 */
function solution(array $firstList, array $secondList): array {

    if ($firstList === [] || $secondList === []) {
        return [];
    }

    $i = 0;
    $j = 0;
    $result = [];

    while ($i < count($firstList) && $j < count($secondList)) {
        [$a, $b] = $firstList[$i];
        [$c, $d] = $secondList[$j];

        $start = max($a, $c);
        $end = min($b, $d);

        if ($start <= $end) {
            $result[] = [$start, $end];
        }

        if ($b < $d) {
            $i++;
        } else {
            $j++;
        }
    }

    return $result;
}
