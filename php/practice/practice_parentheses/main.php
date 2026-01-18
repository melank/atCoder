<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 指定した小数点以下の桁数で出力する
 */
function printFloat(float $value, int $precision = 1): void
{
    printf("%." . $precision . "f\n", $value);
}

/**
 * 括弧の妥当性をチェックする
 *
 * @param string $s 括弧のみで構成された文字列
 * @return bool 妥当であれば true、そうでなければ false
 */
function solution(string $s): bool {
    /**
     * - 開き括弧が来たらスタックに積む（push）
     * - 閉じ括弧が来たらスタックから取り出し（pop）、対応する開き括弧か確認する
     * - 最後にスタックが空なら妥当
     */
    $characters = str_split($s);
    $hiraki = ['(', '{', '['];
    $stack = [];
    foreach ($characters as $c) {
        if (in_array($c, $hiraki, true)) {
            array_push($stack, $c);
        } else {
            $pop = array_pop($stack);
            if (($c === ')' && $pop !== '(') || ($c === '}' && $pop !== '{') || ($c === ']' && $pop !== '[')) {
                return false;
            }
        }
    }

    return $stack === [];
}
