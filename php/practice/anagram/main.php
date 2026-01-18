<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 2つの文字列がアナグラムかどうかを判定する
 *
 * @param string $s 文字列1
 * @param string $t 文字列2
 * @return bool アナグラムであれば true
 */
function solution(string $s, string $t): bool {
    // count_chars: 各バイト(文字)の出現回数を配列で返す
    // モード1: 出現回数が1以上の文字のみ返す
    return count_chars($s, 1) === count_chars($t, 1);
}
