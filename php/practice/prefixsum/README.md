# 区間和クエリ問題

## 問題

```php
class RangeSum {
    public function __construct(array $nums) {}
    public function sumRange(int $left, int $right): int {}
}
```

整数配列 `$nums` を受け取り、指定された区間 `[left, right]` の要素の合計を返すクラス `RangeSum` を実装してください。

`sumRange` メソッドは **何度も呼び出される** ことがあります。

## 例

```php
$nums = [1, 2, 3, 4, 5];
$rangeSum = new RangeSum($nums);

$rangeSum->sumRange(0, 2);  // 1 + 2 + 3 = 6
$rangeSum->sumRange(1, 3);  // 2 + 3 + 4 = 9
$rangeSum->sumRange(0, 4);  // 1 + 2 + 3 + 4 + 5 = 15
```

### 例1
```
入力 : nums = [1, 2, 3, 4, 5], left = 0, right = 2
出力 : 6
```

**解説**: `nums[0] + nums[1] + nums[2] = 1 + 2 + 3 = 6`

### 例2
```
入力 : nums = [-2, 0, 3, -5, 2, -1], left = 0, right = 2
出力 : 1
```

**解説**: `(-2) + 0 + 3 = 1`

### 例3
```
入力 : nums = [-2, 0, 3, -5, 2, -1], left = 2, right = 5
出力 : -1
```

**解説**: `3 + (-5) + 2 + (-1) = -1`

### 例4
```
入力 : nums = [-2, 0, 3, -5, 2, -1], left = 0, right = 5
出力 : -3
```

**解説**: 配列全体の合計

## 制約

```
1 <= len(nums) <= 10000
-10000 <= nums[i] <= 10000
0 <= left <= right < len(nums)
sumRange は最大 10000 回呼び出される
```

## ヒント

この問題は「累積和（Prefix Sum）」を使うと効率的に解けます。

### 単純な方法（遅い）
毎回 `left` から `right` までループして足し算 → O(N) × クエリ数

### 累積和を使う方法（速い）
1. 事前に累積和を計算: `prefix[i] = nums[0] + nums[1] + ... + nums[i-1]`
2. 区間和は引き算で求まる: `sumRange(left, right) = prefix[right+1] - prefix[left]`

前処理 O(N)、各クエリ O(1) で高速！
