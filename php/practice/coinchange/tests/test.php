<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本ケース: 11 = 5+5+1',
            'coins' => [1, 2, 5],
            'amount' => 11,
            'expected' => 3,
        ],
        [
            'name' => '不可能なケース',
            'coins' => [2],
            'amount' => 3,
            'expected' => -1,
        ],
        [
            'name' => '金額0',
            'coins' => [1],
            'amount' => 0,
            'expected' => 0,
        ],
        [
            'name' => '日本円の硬貨',
            'coins' => [1, 5, 10, 50, 100, 500],
            'amount' => 1234,
            'expected' => 11,
        ],
        [
            'name' => 'ちょうど1枚',
            'coins' => [1, 5, 10],
            'amount' => 10,
            'expected' => 1,
        ],
        [
            'name' => '貪欲法では解けないケース',
            'coins' => [1, 3, 4],
            'amount' => 6,
            'expected' => 2, // 3+3（貪欲だと4+1+1=3枚になる）
        ],
        [
            'name' => '大きな金額',
            'coins' => [1, 2, 5],
            'amount' => 100,
            'expected' => 20, // 5×20
        ],
        [
            'name' => 'コインが1種類',
            'coins' => [7],
            'amount' => 14,
            'expected' => 2,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== コイン問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['coins'], $testCase['amount']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   コイン: " . json_encode($testCase['coins']) . "\n";
            echo "   金額: {$testCase['amount']}\n";
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
