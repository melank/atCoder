# PHP 練習問題作成ガイド

このファイルは、PHP の練習問題を作成する際のルールを定義しています。

## 練習問題の作成依頼

ユーザーから練習問題の作成を依頼された場合、以下のルールに従ってください。

### フォルダ構成

```
php/practice_***/
├── main.php           # 解答用ファイル（template.php をコピー）
├── README.md          # 問題文
└── tests/
    └── test.php       # テストコード
```

### 命名規則

- フォルダ名: `practice_` + 問題の内容を表す英単語（例: `practice_schedule`, `practice_merge`）

### 各ファイルの作成方法

#### 1. main.php

`php/template.php` をそのままコピーして作成してください。解答（実装）は含めません。

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

#### 3. tests/test.php

- `main.php` を `require_once` で読み込む
- 複数のテストケースを配列で定義
- 各テストケースには `name`, `input`, `expected` を含める
- テスト結果を ✅ / ❌ で表示
- 合計、成功、失敗の数を表示

テストコードのテンプレート:

```php
<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'テストケース名',
            'input' => /* 入力値 */,
            'expected' => /* 期待値 */,
        ],
        // ... 他のテストケース
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 問題タイトル テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['input']) . "\n";
            echo "   期待値: " . json_encode($testCase['expected']) . "\n";
            echo "   実際の値: " . json_encode($result) . "\n";
            $failed++;
        }
    }

    echo "\n=== 結果 ===\n";
    echo "合計: " . count($testCases) . " テスト\n";
    echo "成功: {$passed}\n";
    echo "失敗: {$failed}\n";

    if ($failed === 0) {
        echo "\n🎉 すべてのテストに合格しました！\n";
    } else {
        echo "\n⚠️  {$failed} 個のテストが失敗しています。\n";
    }
}

runTests();
```

### 注意事項

- **模範解答は作成しない**: `solution_answer.php` などの解答ファイルは用意しない
- **難易度の指定があれば考慮**: 区間マージと同等、など
- **テストケースは最低5個以上**: 基本ケース、境界ケース、エッジケースを含める

### テストの実行方法

```bash
cd php/practice_***/
php tests/test.php
```

## 問題の難易度目安

| レベル | アルゴリズム例 |
|--------|---------------|
| 初級 | 配列操作、文字列操作、単純なループ |
| 中級 | ソート + 線形探索、貪欲法、累積和 |
| 上級 | 動的計画法、グラフ探索、二分探索 |

## 既存の練習問題

- `practice_merge/` - 区間マージ問題
- `practice_schedule/` - 会議室スケジューリング問題（貪欲法）
- `practice_maxsum/` - 部分配列の最大和問題（動的計画法/カデンのアルゴリズム）
- `practice_binsearch/` - 二分探索問題
- `practice_parentheses/` - 括弧の妥当性チェック問題（スタック）