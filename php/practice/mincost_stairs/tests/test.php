<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本例1: 3段',
            'input' => [10, 15, 20],
            'expected' => 15,
        ],
        [
            'name' => '基本例2: コスト100を避ける',
            'input' => [1, 100, 1, 1, 1, 100, 1, 1, 100, 1],
            'expected' => 6,
        ],
        [
            'name' => 'コスト0のみ',
            'input' => [0, 0, 0, 1],
            'expected' => 0,
        ],
        [
            'name' => '最小ケース: 2段',
            'input' => [5, 10],
            'expected' => 5,
        ],
        [
            'name' => '2段目の方が安い',
            'input' => [10, 5],
            'expected' => 5,
        ],
        [
            'name' => '全て同じコスト',
            'input' => [3, 3, 3, 3, 3],
            'expected' => 6,
        ],
        [
            'name' => '交互パターン',
            'input' => [1, 100, 1, 100, 1],
            'expected' => 3,
        ],
        [
            'name' => '昇順コスト',
            'input' => [1, 2, 3, 4, 5],
            'expected' => 6,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 最小コストで階段を登る テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['input']) . "\n";
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
