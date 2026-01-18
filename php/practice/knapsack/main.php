<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * ナップサックに入れるアイテムの価値の最大値を返す
 *
 * @param int $capacity ナップサックの容量
 * @param int[] $weights 各アイテムの重さ
 * @param int[] $values 各アイテムの価値
 * @return int 最大価値
 */
function solution(int $capacity, array $weights, array $values): int {
    // TODO: ここに実装を書いてください
    return 0;
}
