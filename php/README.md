## 環境

| ツール                  | バージョン |
|-------------------------|------------|
| oj (online-judge-tools) | 11.5.1     |
| acc (atcoder-cli)       | 2.2.0      |
| PHP (このフォルダ用)    | 8.4.16     |

## 使い方

### コンテスト問題をダウンロード

```bash
acc new abc001
```

各問題フォルダに `main.php` と `tests/` が作成されます。

### テスト実行

```bash
cd abc001/a
oj test -c "php main.php" -d tests
```

### 提出

CLI からの提出は AtCoder 側の変更により不安定です。ブラウザから直接提出してください。

## テンプレート

`acc new` 実行時に自動で `main.php` が作成されます。

テンプレートの場所：
```
~/Library/Preferences/atcoder-cli-nodejs/php/main.php
```

### 利用可能な関数

```php
getLine()       // 1行読み込み (string)
getInt()        // 整数読み込み (int)
getIntArray()   // スペース区切りの整数配列 (array)
getLines($n)    // n行読み込み (array)
printResult($r) // 結果出力（改行付き）
```