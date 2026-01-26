<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本ケース: 配列の中央付近',
            'input' => ['nums' => [1, 3, 5, 7, 9, 11], 'target' => 7],
            'expected' => 3,
        ],
        [
            'name' => '存在しない値',
            'input' => ['nums' => [1, 3, 5, 7, 9, 11], 'target' => 4],
            'expected' => -1,
        ],
        [
            'name' => '配列の先頭',
            'input' => ['nums' => [2, 4, 6, 8, 10], 'target' => 2],
            'expected' => 0,
        ],
        [
            'name' => '配列の末尾',
            'input' => ['nums' => [2, 4, 6, 8, 10], 'target' => 10],
            'expected' => 4,
        ],
        [
            'name' => '要素が1つだけ（存在する）',
            'input' => ['nums' => [5], 'target' => 5],
            'expected' => 0,
        ],
        [
            'name' => '要素が1つだけ（存在しない）',
            'input' => ['nums' => [5], 'target' => 3],
            'expected' => -1,
        ],
        [
            'name' => '負の値を含む配列',
            'input' => ['nums' => [-10, -5, 0, 5, 10], 'target' => -5],
            'expected' => 1,
        ],
        [
            'name' => '範囲外（小さすぎる）',
            'input' => ['nums' => [10, 20, 30, 40, 50], 'target' => 5],
            'expected' => -1,
        ],
        [
            'name' => '範囲外（大きすぎる）',
            'input' => ['nums' => [10, 20, 30, 40, 50], 'target' => 100],
            'expected' => -1,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 目標値の探索 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']['nums'], $testCase['input']['target']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: nums=" . json_encode($testCase['input']['nums']) . ", target=" . $testCase['input']['target'] . "\n";
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
