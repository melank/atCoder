<?php

// 回答の末尾には改行を付けなければいけない
function printResult(int|float|string $result): void
{
    echo (string) $result . "\n";
}

/**
 * 99 Bottles of Beer on the Wall の歌詞を生成する
 *
 * @return string 完全な歌詞
 */
function solution(): string {
    for ($i = 99; $i >= 2; $i--) {
        printResult("{$i} bottles of beer on the wall, {$i} bottles of beer.");
        printResult("Take one down and pass it around, {$i} bottles of beer on the wall.");
        printResult("");
    }
    printResult("1 bottle of beer on the wall, 1 bottle of beer.");
    printResult("Take one down and pass it around, 1 bottle of beer on the wall.");
    printResult("");
    printResult("No more bottles of beer on the wall, no more bottles of beer.");
    printResult("Go to the store and buy some more, 99 bottles of beer on the wall.");

    return '';
}

solution();