<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本例',
            'input' => [1, 8, 6, 2, 5, 4, 8, 3, 7],
            'expected' => 49,
        ],
        [
            'name' => '最小ケース',
            'input' => [1, 1],
            'expected' => 1,
        ],
        [
            'name' => '両端が最大',
            'input' => [4, 3, 2, 1, 4],
            'expected' => 16,
        ],
        [
            'name' => '3要素',
            'input' => [1, 2, 1],
            'expected' => 2,
        ],
        [
            'name' => '昇順',
            'input' => [1, 2, 3, 4, 5],
            'expected' => 6,
        ],
        [
            'name' => '降順',
            'input' => [5, 4, 3, 2, 1],
            'expected' => 6,
        ],
        [
            'name' => '全て同じ高さ',
            'input' => [3, 3, 3, 3],
            'expected' => 9,
        ],
        [
            'name' => '中央が高い',
            'input' => [1, 3, 5, 3, 1],
            'expected' => 6,
        ],
        [
            'name' => '高さ0を含む',
            'input' => [5, 0, 0, 0, 5],
            'expected' => 20,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 水を貯める容器 テスト ===\n\n";

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
