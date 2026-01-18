<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本ケース',
            'nums' => [3, 2, 3],
            'expected' => 3,
        ],
        [
            'name' => 'Example 2: 長い配列',
            'nums' => [2, 2, 1, 1, 1, 2, 2],
            'expected' => 2,
        ],
        [
            'name' => 'Example 3: 1要素',
            'nums' => [1],
            'expected' => 1,
        ],
        [
            'name' => 'Example 4: 全て同じ',
            'nums' => [1, 1, 1, 1],
            'expected' => 1,
        ],
        [
            'name' => 'Example 5: 3要素',
            'nums' => [6, 5, 5],
            'expected' => 5,
        ],
        [
            'name' => '2要素',
            'nums' => [1, 1],
            'expected' => 1,
        ],
        [
            'name' => '先頭に過半数',
            'nums' => [5, 5, 5, 1, 2],
            'expected' => 5,
        ],
        [
            'name' => '末尾に過半数',
            'nums' => [1, 2, 5, 5, 5],
            'expected' => 5,
        ],
        [
            'name' => '交互に出現',
            'nums' => [1, 2, 1, 2, 1],
            'expected' => 1,
        ],
        [
            'name' => '大きな値',
            'nums' => [1000, 1000, 1, 1000],
            'expected' => 1000,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 多数決要素問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['nums']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['nums']) . "\n";
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
