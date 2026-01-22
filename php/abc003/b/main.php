<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function getInt(): int {
    return (int) getLine();
}

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

/**
 *
 * AtCoder社では 1 人で行うトランプを使ったゲームが流行っています。
 * AtCoder社特製トランプでは、各カードにアルファベット小文字 1 文字（a～z）、または@の文字が書かれています。

 * ゲームは以下の手順で行います。
 * - カードを同じ枚数ずつ 2 列に並べて文字列を2つ作ります。
 * - @のカードは、それぞれa,t,c,o,d,e,rのどれかのカードと置き換えます。
 * - 2つの列が指し示す文字列が同じであれば勝ち、同じでなければ負けです。
 *
 * 手順 1.で並べられた 2つの列が指し示す2つの文字列与えられるので、
 * 適切に@を置き換えて、このゲームで勝つことができるかどうかを判定するプログラムを書いてください。
 */

// Main
function solve(): void {
    // Write your solution here
    $s = getLine();
    $t = getLine();
    $wildcard = ['a', 't', 'c', 'o', 'd', 'e', 'r'];

    for ($i = 0; $i < strlen($s); $i++) {
        $c1 = $s[$i];
        $c2 = $t[$i];

        if ($c1 === '@' && $c2 === '@') {
            continue;
        }

        // c1 がワイルドカードの時
        if ($c1 === '@') {
            if (in_array($c2, $wildcard)) {
                continue;
            }
            printResult("You will lose");
            return;
        }
        // c2 がワイルドカードの時
        if ($c2 === '@') {
            if (in_array($c1, $wildcard)) {
                continue;
            }
            printResult("You will lose");
            return;
        }

        if ($c1 !== $c2) {
            printResult("You will lose");
            return;
        }
    }

    printResult('You can win');
}

solve();
