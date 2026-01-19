<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本ケース',
            'prices' => [7, 1, 5, 3, 6, 4],
            'expected' => 5,
        ],
        [
            'name' => 'Example 2: 下降のみ',
            'prices' => [7, 6, 4, 3, 1],
            'expected' => 0,
        ],
        [
            'name' => 'Example 3: 短い配列',
            'prices' => [2, 4, 1],
            'expected' => 2,
        ],
        [
            'name' => 'Example 4: 複数の山',
            'prices' => [3, 2, 6, 5, 0, 3],
            'expected' => 4,
        ],
        [
            'name' => 'Example 5: 1要素',
            'prices' => [1],
            'expected' => 0,
        ],
        [
            'name' => '上昇のみ',
            'prices' => [1, 2, 3, 4, 5],
            'expected' => 4,
        ],
        [
            'name' => '同じ価格',
            'prices' => [5, 5, 5, 5],
            'expected' => 0,
        ],
        [
            'name' => '最後に最大値',
            'prices' => [2, 1, 4],
            'expected' => 3,
        ],
        [
            'name' => '2要素で利益',
            'prices' => [1, 2],
            'expected' => 1,
        ],
        [
            'name' => '2要素で損失',
            'prices' => [2, 1],
            'expected' => 0,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 株式売買問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['prices']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['prices']) . "\n";
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
