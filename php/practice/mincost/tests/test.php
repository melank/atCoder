<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: [10, 15, 20]',
            'cost' => [10, 15, 20],
            'expected' => 15,
        ],
        [
            'name' => 'Example 2: 長い配列',
            'cost' => [1, 100, 1, 1, 1, 100, 1, 1, 100, 1],
            'expected' => 6,
        ],
        [
            'name' => 'Example 3: 全てコスト0',
            'cost' => [0, 0, 0, 0],
            'expected' => 0,
        ],
        [
            'name' => 'Example 4: 2要素',
            'cost' => [1, 2],
            'expected' => 1,
        ],
        [
            'name' => 'Example 5: 1要素',
            'cost' => [5],
            'expected' => 0,
        ],
        [
            'name' => '3要素: 最初から登る',
            'cost' => [1, 2, 3],
            'expected' => 2,
        ],
        [
            'name' => '3要素: 2番目から登る',
            'cost' => [10, 1, 1],
            'expected' => 2,
        ],
        [
            'name' => '均等なコスト',
            'cost' => [5, 5, 5, 5, 5],
            'expected' => 10,
        ],
        [
            'name' => '交互パターン',
            'cost' => [1, 100, 1, 100, 1],
            'expected' => 3,
        ],
        [
            'name' => '増加パターン',
            'cost' => [1, 2, 3, 4, 5, 6],
            'expected' => 9,  // 1 + 3 + 5 = 9
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 最小コスト階段問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['cost']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   コスト: [" . implode(', ', $testCase['cost']) . "]\n";
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
