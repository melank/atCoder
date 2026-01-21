<?php

function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 文字列が有効な括弧列かどうかを判定する
 *
 * @param string $s 括弧のみで構成された文字列
 * @return bool 有効な括弧列なら true
 */
function solution(string $s): bool {
    // TODO: 実装してください
    $hidari = ['(', '[', '{'];
    $kakko = str_split($s);
    $stack = [];

    if (count($kakko) %2 !== 0) {
        return false;
    }

    foreach ($kakko as $k) {
        if (in_array($k, $hidari)) {
            array_push($stack, $k);
        } else {
            $pop = array_pop($stack);
            if (($pop === '(' && $k !== ')') || ($pop === '{' && $k !== '}') || ($pop === '[' && $k !== ']')) {
                return false;
            }
        }
    }

    return count($stack) === 0;
}
