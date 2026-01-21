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
    $pairs = ['(' => ')', '[' => ']', '{' => '}'];
    $stack = [];

    for ($i = 0; $i < strlen($s); $i++) {
        $c = $s[$i];
        if (isset($pairs[$c])) {
            // 開きカッコであるかどうか
            $stack[] = $pairs[$c];  // 対応する閉じ括弧をpush
        } elseif (array_pop($stack) !== $c) {
            // 閉じカッコなら、対応する開きカッコがpopされるかを確認
            return false;
        }
    }

    return empty($stack);
}
