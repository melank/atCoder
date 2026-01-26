<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本ケース: 5要素の配列',
            'input' => [1, 2, 3, 4, 5],
            'expected' => [5, 4, 3, 2, 1],
        ],
        [
            'name' => '2要素の配列',
            'input' => [1, 2],
            'expected' => [2, 1],
        ],
        [
            'name' => '1要素の配列',
            'input' => [7],
            'expected' => [7],
        ],
        [
            'name' => '偶数個の要素',
            'input' => [1, 2, 3, 4],
            'expected' => [4, 3, 2, 1],
        ],
        [
            'name' => '負の値を含む配列',
            'input' => [-3, 0, 5, -1, 2],
            'expected' => [2, -1, 5, 0, -3],
        ],
        [
            'name' => '同じ値が含まれる配列',
            'input' => [1, 2, 2, 1],
            'expected' => [1, 2, 2, 1],
        ],
        [
            'name' => '大きめの配列',
            'input' => [10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
            'expected' => [100, 90, 80, 70, 60, 50, 40, 30, 20, 10],
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 配列の反転 テスト ===\n\n";

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
