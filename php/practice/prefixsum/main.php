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
 * 区間和クエリを高速に処理するクラス
 */
class RangeSum {
    /** @var int[] 累積和（先頭に0を追加） */
    private array $prefix;

    public function __construct(array $nums) {
        // prefix[0] = 0 を追加することで、sumRange での条件分岐が不要になる
        // prefix[i] = nums[0] + nums[1] + ... + nums[i-1]
        $this->prefix = array_reduce(
            $nums,
            fn(array $acc, int $n) => [...$acc, end($acc) + $n],
            [0]
        );
    }

    public function sumRange(int $left, int $right): int {
        // prefix[right+1] - prefix[left] で区間和が求まる
        return $this->prefix[$right + 1] - $this->prefix[$left];
    }
}
