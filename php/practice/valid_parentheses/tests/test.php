<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    // 手計算で検証済みのテストケース
    $testCases = [
        [
            'name' => '基本: ()',
            'input' => '()',
            'expected' => true,
        ],
        [
            'name' => '3種類の括弧',
            'input' => '()[]{}',
            'expected' => true,
        ],
        [
            'name' => '種類の不一致',
            'input' => '(]',
            'expected' => false,
        ],
        [
            'name' => '順序の不一致',
            'input' => '([)]',
            'expected' => false,
        ],
        [
            'name' => '入れ子',
            'input' => '{[]}',
            'expected' => true,
        ],
        [
            'name' => '空文字列',
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
            'name' => '深い入れ子',
            'input' => '((()))',
            'expected' => true,
        ],
        [
            'name' => '複雑な入れ子',
            'input' => '{[()]}',
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
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 有効な括弧 テスト ===\n\n";

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
