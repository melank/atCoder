<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的な丸括弧',
            'input' => '()',
            'expected' => true,
        ],
        [
            'name' => 'Example 2: 3種類の括弧',
            'input' => '()[]{}',
            'expected' => true,
        ],
        [
            'name' => 'Example 3: 不正な組み合わせ',
            'input' => '(]',
            'expected' => false,
        ],
        [
            'name' => 'Example 4: 順序が不正',
            'input' => '([)]',
            'expected' => false,
        ],
        [
            'name' => 'Example 5: ネストされた括弧',
            'input' => '{[]}',
            'expected' => true,
        ],
        [
            'name' => 'Example 6: 空文字列',
            'input' => '',
            'expected' => true,
        ],
        [
            'name' => '開き括弧のみ',
            'input' => '(',
            'expected' => false,
        ],
        [
            'name' => '閉じ括弧のみ',
            'input' => ')',
            'expected' => false,
        ],
        [
            'name' => '深いネスト',
            'input' => '{{{{{{{{{{}}}}}}}}}}',
            'expected' => true,
        ],
        [
            'name' => '複雑なネスト',
            'input' => '{[()()][{}]}',
            'expected' => true,
        ],
        [
            'name' => '閉じ括弧が多い',
            'input' => '())',
            'expected' => false,
        ],
        [
            'name' => '開き括弧が多い',
            'input' => '(()',
            'expected' => false,
        ],
        [
            'name' => '長い正しい括弧列',
            'input' => '()()()()()[][]{}{}([]){()}',
            'expected' => true,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 括弧の妥当性チェック問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: \"{$testCase['input']}\"\n";
            echo "   期待値: " . ($testCase['expected'] ? 'true' : 'false') . "\n";
            echo "   実際の値: " . ($result ? 'true' : 'false') . "\n";
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
