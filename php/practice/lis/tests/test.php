<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本ケース',
            'input' => [10, 9, 2, 5, 3, 7, 101, 18],
            'expected' => 4,
        ],
        [
            'name' => '重複を含むケース',
            'input' => [0, 1, 0, 3, 2, 3],
            'expected' => 4,
        ],
        [
            'name' => 'すべて同じ値',
            'input' => [7, 7, 7, 7, 7],
            'expected' => 1,
        ],
        [
            'name' => '全体が増加列',
            'input' => [1, 2, 3, 4, 5],
            'expected' => 5,
        ],
        [
            'name' => '減少列',
            'input' => [5, 4, 3, 2, 1],
            'expected' => 1,
        ],
        [
            'name' => '1要素',
            'input' => [42],
            'expected' => 1,
        ],
        [
            'name' => '2要素（増加）',
            'input' => [1, 2],
            'expected' => 2,
        ],
        [
            'name' => '2要素（減少）',
            'input' => [2, 1],
            'expected' => 1,
        ],
        [
            'name' => '負の数を含む',
            'input' => [-5, -2, -1, 0, 3],
            'expected' => 5,
        ],
        [
            'name' => 'ジグザグパターン',
            'input' => [1, 3, 2, 4, 3, 5],
            'expected' => 4, // [1, 2, 3, 5] or [1, 2, 4, 5] など
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 最長増加部分列（LIS） テスト ===\n\n";

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
