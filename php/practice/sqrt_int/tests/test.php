<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    // 手計算で検証済みのテストケース
    // n² ≤ x となる最大の n を求める
    $testCases = [
        [
            'name' => 'x = 0',
            'input' => 0,
            'expected' => 0,  // √0 = 0
        ],
        [
            'name' => 'x = 1',
            'input' => 1,
            'expected' => 1,  // √1 = 1
        ],
        [
            'name' => 'x = 4（完全平方数）',
            'input' => 4,
            'expected' => 2,  // √4 = 2.0
        ],
        [
            'name' => 'x = 8',
            'input' => 8,
            'expected' => 2,  // √8 = 2.828..., 2² = 4 ≤ 8, 3² = 9 > 8
        ],
        [
            'name' => 'x = 9（完全平方数）',
            'input' => 9,
            'expected' => 3,  // √9 = 3.0
        ],
        [
            'name' => 'x = 15',
            'input' => 15,
            'expected' => 3,  // √15 = 3.872..., 3² = 9 ≤ 15, 4² = 16 > 15
        ],
        [
            'name' => 'x = 16（完全平方数）',
            'input' => 16,
            'expected' => 4,  // √16 = 4.0
        ],
        [
            'name' => 'x = 2',
            'input' => 2,
            'expected' => 1,  // √2 = 1.414..., 1² = 1 ≤ 2, 2² = 4 > 2
        ],
        [
            'name' => 'x = 100',
            'input' => 100,
            'expected' => 10,  // √100 = 10.0
        ],
        [
            'name' => '大きい数（2147483647）',
            'input' => 2147483647,
            'expected' => 46340,  // 46340² = 2147395600 ≤ x, 46341² = 2147488281 > x
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 平方根の整数部分 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: {$testCase['input']}\n";
            echo "   期待値: {$testCase['expected']}\n";
            echo "   実際の値: {$result}\n";
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
