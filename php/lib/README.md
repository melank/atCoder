# PHP ヘルパーライブラリ

競技プログラミング用のヘルパー関数集です。

## 使い方

```php
<?php
require_once __DIR__ . '/../lib/io.php';
require_once __DIR__ . '/../lib/math.php';
// 必要なライブラリを読み込む
```

## ファイル一覧

### io.php - 入出力

| 関数 | 説明 |
|-----|------|
| `getLine()` | 1行読み込み |
| `getInt()` | 整数を1つ読み込み |
| `getArray()` | スペース区切りの配列 |
| `getIntArray()` | スペース区切りの整数配列 |
| `getLines($n)` | n行読み込み |
| `printResult($result)` | 結果出力（改行付き） |
| `printFloat($value, $precision)` | 小数点以下指定桁数で出力 |
| `printLines($arr)` | 配列を改行区切りで出力 |
| `printArray($arr)` | 配列をスペース区切りで出力 |
| `printYesNo($condition)` | Yes/No を出力 |

### math.php - 数学

| 関数 | 説明 |
|-----|------|
| `gcd($a, $b)` | 最大公約数 |
| `lcm($a, $b)` | 最小公倍数 |
| `gcdArray($arr)` | 配列の最大公約数 |
| `lcmArray($arr)` | 配列の最小公倍数 |
| `isPrime($n)` | 素数判定 |
| `primeFactorize($n)` | 素因数分解 |
| `divisors($n)` | 約数列挙 |
| `modPow($base, $exp, $mod)` | 累乗（mod付き） |

### matrix.php - 行列操作

| 関数 | 説明 |
|-----|------|
| `flipVertical($matrix)` | 上下反転 |
| `flipHorizontal($matrix)` | 左右反転 |
| `rotate180($matrix)` | 180度回転 |
| `rotate90Clockwise($matrix)` | 90度時計回り回転 |
| `rotate90CounterClockwise($matrix)` | 90度反時計回り回転 |
| `transpose($matrix)` | 転置 |
| `printMatrix($matrix, $sep)` | 行列出力 |
| `readMatrix($rows, $sep)` | 行列読み込み |

### string.php - 文字列操作

| 関数 | 説明 |
|-----|------|
| `strReverse($s)` | 文字列反転 |
| `isPalindrome($s)` | 回文判定 |
| `charCount($s)` | 文字の出現回数 |
| `containsOnly($s, $chars)` | 特定文字のみか判定 |
| `isAnagram($s1, $s2)` | アナグラム判定 |
| `removeVowels($s)` | 母音削除 |
| `runLengthEncode($s)` | ランレングス圧縮 |
| `runLengthDecode($encoded)` | ランレングス復号 |

## 例

```php
<?php
require_once __DIR__ . '/../lib/io.php';
require_once __DIR__ . '/../lib/matrix.php';

function solve(): void {
    $matrix = readMatrix(4);
    $rotated = rotate180($matrix);
    printMatrix($rotated);
}

solve();
```
