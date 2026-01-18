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
 * 逆ポーランド記法の数式を計算する
 *
 * @param array $tokens 逆ポーランド記法のトークン配列
 * @return int 計算結果
 */
function solution(array $tokens): int {
    $op = ['+', '-', '*', '/'];
    $stack = [];
    foreach ($tokens as $t) {
        if (in_array($t, $op)) {
            $p2 = array_pop($stack);
            $p1 = array_pop($stack);
            array_push($stack, match ($t) {
                '+' => $p1 + $p2,
                '-' => $p1 - $p2,
                '*' => $p1 * $p2,
                '/' => (int)($p1 / $p2)  // 0に向かって切り捨て
            });
        } else {
            array_push($stack, (int)$t);  // 数値として積む
        }
    }
    return $stack[0];
}
