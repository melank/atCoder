<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本ケース: 12と18',
            'a' => 12,
            'b' => 18,
            'expected' => [6, 36],
        ],
        [
            'name' => '互いに素: 7と11',
            'a' => 7,
            'b' => 11,
            'expected' => [1, 77],
        ],
        [
            'name' => '倍数関係: 100と25',
            'a' => 100,
            'b' => 25,
            'expected' => [25, 100],
        ],
        [
            'name' => '両方1',
            'a' => 1,
            'b' => 1,
            'expected' => [1, 1],
        ],
        [
            'name' => '48と18',
            'a' => 48,
            'b' => 18,
            'expected' => [6, 144],
        ],
        [
            'name' => '同じ数: 15と15',
            'a' => 15,
            'b' => 15,
            'expected' => [15, 15],
        ],
        [
            'name' => '1を含む: 1と100',
            'a' => 1,
            'b' => 100,
            'expected' => [1, 100],
        ],
        [
            'name' => '大きな数: 123456と789012',
            'a' => 123456,
            'b' => 789012,
            'expected' => [12, 8117355456],
        ],
        [
            'name' => '連続する数: 20と21',
            'a' => 20,
            'b' => 21,
            'expected' => [1, 420],
        ],
        [
            'name' => '2のべき乗: 32と64',
            'a' => 32,
            'b' => 64,
            'expected' => [32, 64],
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== GCD/LCM テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['a'], $testCase['b']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: a={$testCase['a']}, b={$testCase['b']}\n";
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
