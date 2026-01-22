<?php

/**
 * 文字列ヘルパー関数
 */

/**
 * 文字列を反転
 * @param string $s
 * @return string
 */
function strReverse(string $s): string {
    return strrev($s);
}

/**
 * 回文判定
 * @param string $s
 * @return bool
 */
function isPalindrome(string $s): bool {
    return $s === strrev($s);
}

/**
 * 文字の出現回数をカウント
 * @param string $s
 * @return array [文字 => 出現回数]
 */
function charCount(string $s): array {
    return count_chars($s, 1);
}

/**
 * 文字列が特定の文字のみで構成されているか
 * @param string $s
 * @param string $chars 許可する文字
 * @return bool
 */
function containsOnly(string $s, string $chars): bool {
    return preg_match("/^[$chars]+$/", $s) === 1;
}

/**
 * 2つの文字列がアナグラムか判定
 * @param string $s1
 * @param string $s2
 * @return bool
 */
function isAnagram(string $s1, string $s2): bool {
    return count_chars($s1, 1) === count_chars($s2, 1);
}

/**
 * 文字列から母音を削除
 * @param string $s
 * @return string
 */
function removeVowels(string $s): string {
    return str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '', $s);
}

/**
 * ランレングス圧縮
 * @param string $s
 * @return array [[文字, 連続数], ...]
 */
function runLengthEncode(string $s): array {
    if ($s === '') return [];

    $result = [];
    $len = strlen($s);
    $count = 1;

    for ($i = 1; $i < $len; $i++) {
        if ($s[$i] === $s[$i - 1]) {
            $count++;
        } else {
            $result[] = [$s[$i - 1], $count];
            $count = 1;
        }
    }
    $result[] = [$s[$len - 1], $count];

    return $result;
}

/**
 * ランレングス復号
 * @param array $encoded [[文字, 連続数], ...]
 * @return string
 */
function runLengthDecode(array $encoded): string {
    return array_reduce($encoded, fn($carry, $item) => $carry . str_repeat($item[0], $item[1]), '');
}
