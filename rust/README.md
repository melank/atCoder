## 環境

- rustc (stable)
- oj / acc (global にインストール済み)

## 使い方

### コンテスト問題をダウンロード

```bash
acc new abc001
```

各問題フォルダに `main.rs` と `tests/` が作成されます。

### テスト実行

```bash
cd abc001/a
oj test -c "rustc main.rs -O -o main && ./main" -d tests
```

### ローカル実行

```bash
rustc main.rs -O -o main
./main < input.txt
```

## テンプレート

`acc new` 実行時に自動で `main.rs` が作成されます。

テンプレートの場所：
```
~/Library/Preferences/atcoder-cli-nodejs/rust/main.rs
```

### 使える関数

`rust/template.rs` にある `solve(input: &str) -> String` を編集して解答します。

- `Scanner::next<T>()` : 空白区切り入力の取得
- `solve()` : 文字列入力を受け取り、出力文字列を返す
