# Rust 練習問題作成ガイド

このファイルは、Rust の練習問題を作成する際のルールを定義しています。

## 練習問題の作成依頼

ユーザーから練習問題の作成を依頼された場合、以下のルールに従ってください。

### フォルダ構成

```
rust/practice/
└── ***/
    ├── main.rs            # 解答用ファイル（template.rs をコピー）
    ├── README.md          # 問題文
    └── tests/
        └── test.rs        # テストコード
```

### 命名規則

- フォルダ名: `practice/` + 問題の内容を表す英単語（例: `practice/schedule`, `practice/merge`）

### 各ファイルの作成方法

#### 1. main.rs

`rust/template.rs` をコピーし、`solve()` を残す。
- `pub fn solve(input: &str) -> String` を含める
- `main()` は標準入力から読み込んで `solve()` を呼び出す
- 解答（実装）は含めない（TODO コメントのみ）

#### 2. README.md

以下の構成で作成してください：

```markdown
# 問題タイトル

## 問題

（問題の説明）

## 例

### 例1
（入力と出力の例）

### 例2
（入力と出力の例）

## 制約

（制約条件）

## ヒント

（任意：アルゴリズムのヒント）
```

#### 3. tests/test.rs

- `main.rs` を `#[path = "../main.rs"]` で読み込む
- 複数のテストケースを関数ごとに作成
- `assert_eq!(solve(input), expected)` で検証

テストコードのテンプレート:

```rust
#[path = "../main.rs"]
mod main;

#[test]
fn sample_1() {
    let input = "";
    let expected = "";
    assert_eq!(main::solve(input), expected);
}

#[test]
fn sample_2() {
    let input = "";
    let expected = "";
    assert_eq!(main::solve(input), expected);
}
```

### 注意事項

- **模範解答は作成しない**: `solution.rs` などの解答ファイルは用意しない
- **難易度の指定があれば考慮**: 区間マージと同等、など
- **テストケースは最低5個以上**: 基本ケース、境界ケース、エッジケースを含める
- **テストケースの期待値は必ず手計算で検証する**: 誤った期待値を含めないこと

### テストの実行方法

```bash
cd rust/practice/***/
rustc --test tests/test.rs -O -o tests/test && ./tests/test
```
