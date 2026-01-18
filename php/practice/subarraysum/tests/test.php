<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的なケース',
            'nums' => [1, 1, 1],
            'k' => 2,
            'expected' => 2,
        ],
        [
            'name' => 'Example 2: 異なる値',
            'nums' => [1, 2, 3],
            'k' => 3,
            'expected' => 2,
        ],
        [
            'name' => 'Example 3: 和が0（負の数を含む）',
            'nums' => [1, -1, 1, -1, 1],
            'k' => 0,
            'expected' => 4,
        ],
        [
            'name' => 'Example 4: 複雑なケース',
            'nums' => [3, 4, 7, 2, -3, 1, 4, 2],
            'k' => 7,
            'expected' => 4,
        ],
        [
            'name' => 'Example 5: 1要素',
            'nums' => [1],
            'k' => 1,
            'expected' => 1,
        ],
        [
            'name' => '該当なし',
            'nums' => [1, 2, 3],
            'k' => 100,
            'expected' => 0,
        ],
        [
            'name' => '全体が該当',
            'nums' => [1, 2, 3, 4],
            'k' => 10,
            'expected' => 1,
        ],
        [
            'name' => 'すべてゼロ、k=0',
            'nums' => [0, 0, 0],
            'k' => 0,
            'expected' => 6,  // [0], [0], [0], [0,0], [0,0], [0,0,0]
        ],
        [
            'name' => '負の数のみ',
            'nums' => [-1, -1, -1],
            'k' => -2,
            'expected' => 2,
        ],
        [
            'name' => '大きな配列',
            'nums' => array_fill(0, 100, 1),
            'k' => 5,
            'expected' => 96,  // 100 - 5 + 1 = 96
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 和がKになる部分配列の数 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['nums'], $testCase['k']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   配列サイズ: " . count($testCase['nums']) . "\n";
            echo "   k: {$testCase['k']}\n";
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
