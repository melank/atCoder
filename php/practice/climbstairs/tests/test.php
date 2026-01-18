<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: n=2',
            'n' => 2,
            'expected' => 2,
        ],
        [
            'name' => 'Example 2: n=3',
            'n' => 3,
            'expected' => 3,
        ],
        [
            'name' => 'Example 3: n=4',
            'n' => 4,
            'expected' => 5,
        ],
        [
            'name' => 'Example 4: n=1',
            'n' => 1,
            'expected' => 1,
        ],
        [
            'name' => 'Example 5: n=5',
            'n' => 5,
            'expected' => 8,
        ],
        [
            'name' => 'n=6',
            'n' => 6,
            'expected' => 13,
        ],
        [
            'name' => 'n=7',
            'n' => 7,
            'expected' => 21,
        ],
        [
            'name' => 'n=10',
            'n' => 10,
            'expected' => 89,
        ],
        [
            'name' => 'n=20',
            'n' => 20,
            'expected' => 10946,
        ],
        [
            'name' => 'n=30',
            'n' => 30,
            'expected' => 1346269,
        ],
        [
            'name' => 'n=45（最大ケース）',
            'n' => 45,
            'expected' => 1836311903,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 階段の登り方問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['n']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   n: {$testCase['n']}\n";
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
