# CLAUDE.md

このファイルは Claude Code (claude.ai/code) がこのリポジトリで作業する際のガイドです。

## 概要

AtCoder の競技プログラミング解答集。Python と PHP で実装。

## コマンド

### コンテスト問題のダウンロード
```bash
cd php  # または python
acc new abc001
```

### テスト実行
```bash
cd php/abc001/a
oj test -c "php main.php" -d tests
```

```bash
cd python/abc001/a
oj test -c "python main.py" -d tests
```

### 練習問題のテスト実行（PHP のみ）
```bash
cd php/practice/問題名
php tests/test.php
```

## ディレクトリ構成

```
php/                    # PHP 解答
  abc{NNN}/             # コンテストディレクトリ
    a/, b/, c/, d/      # 問題ディレクトリ
      main.php          # 解答ファイル
      tests/            # サンプルテスト (sample-*.in, sample-*.out)
  lib/                  # ヘルパーライブラリ (io, math, matrix, string)
  practice/             # 練習問題（独自テスト付き）
  template.php          # 解答テンプレート

python/                 # Python 解答（PHP と同じ構成）
```

## PHP ヘルパーライブラリ

`php/lib/` に配置。読み込み方法：
```php
require_once __DIR__ . '/../lib/io.php';
require_once __DIR__ . '/../lib/math.php';
```

主な関数：
- **io.php**: `getLine()`, `getInt()`, `getIntArray()`, `getLines($n)`, `printResult()`, `printYesNo()`
- **math.php**: `gcd()`, `lcm()`, `isPrime()`, `primeFactorize()`, `divisors()`, `modPow()`
- **matrix.php**: `rotate90Clockwise()`, `rotate180()`, `flipVertical()`, `transpose()`, `printMatrix()`
- **string.php**: `strReverse()`, `isPalindrome()`, `isAnagram()`, `runLengthEncode()`

## PHP テンプレート関数

テンプレート (`php/template.php`) に含まれる標準 I/O 関数：
```php
getLine()                           // 1行読み込み (string)
readInt()                           // 整数1つ読み込み
getIntArray()                       // スペース区切りの整数配列
readLines($n)                       // n行読み込み
printResult($result)                // 結果出力（改行付き）
printFloat($value, $precision)      // 指定桁数で小数出力
```

## 注意事項

- CLI からの提出 (`acc submit`) は AtCoder 側の変更により不安定。ブラウザから直接提出すること。
- 認証は手動で Cookie 設定が必要。詳細はルートの README.md を参照。
- ツールバージョン: oj 11.5.1, acc 2.2.0, PHP 8.4

## 練習問題（PHP）

新しい練習問題を作成する場合は `php/AGENTS.md` のガイドに従う：
- フォルダ作成: `php/practice/問題名/`
- `php/template.php` を `main.php` としてコピー
- `README.md` に問題文を記載
- `tests/test.php` にテストケースを追加（最低5個）
- 模範解答は含めない

## 出題エージェント

Claude に練習問題を出題してもらうための指示方法。

### 基本的な指示例

```
問題を出題して
```
→ カテゴリと難易度を確認してから出題

### カテゴリ・難易度を指定する場合

```
グラフの初級問題を出題して
DPの中級問題を出題して
データ構造の入門問題を出題して
```

### アルゴリズムを指定する場合

```
BFSを使った問題を出題して
Union-Findの問題を出題して
メモ化再帰の問題を出題して
```

### AtCoder レベルを指定する場合

```
ABC C問題レベルの問題を出題して
ABC D問題レベルのDP問題を出題して
```

### カテゴリ一覧

| カテゴリ | 内容 |
|---------|------|
| グラフ | BFS、DFS、最短経路、Union-Find、トポロジカルソート |
| DP | メモ化、テーブルDP、区間DP、ナップサック、LIS |
| データ構造 | スタック、キュー、ヒープ、優先度付きキュー |
| 文字列 | 回文、アナグラム、ランレングス、部分文字列 |
| 数学 | GCD/LCM、素数、累乗、組み合わせ |
| 配列操作 | 二分探索、累積和、スライディングウィンドウ、2ポインタ |

### 難易度一覧

| 難易度 | 目安 |
|--------|------|
| 入門（★☆☆☆☆） | 基本アルゴリズムの理解確認 |
| 初級（★★☆☆☆） | ABC A〜C問題レベル |
| 中級（★★★☆☆） | ABC C〜D問題レベル |
| 上級（★★★★☆） | ABC D〜E問題レベル |

### 出題後の流れ

1. `php/practice/問題名/` にファイルが作成される
2. `main.php` の `solution()` 関数を実装
3. `php tests/test.php` でテスト実行
4. 全テスト通過で完了
