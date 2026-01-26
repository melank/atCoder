<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的なケース',
            'nums' => [1, 3, 5, 7, 9],
            'target' => 5,
            'expected' => 2,
        ],
        [
            'name' => 'Example 2: 存在しない値',
            'nums' => [1, 3, 5, 7, 9],
            'target' => 6,
            'expected' => -1,
        ],
        [
            'name' => 'Example 3: 先頭の値',
            'nums' => [2, 4, 6, 8, 10, 12, 14, 16, 18, 20],
            'target' => 2,
            'expected' => 0,
        ],
        [
            'name' => 'Example 4: 末尾の値',
            'nums' => [2, 4, 6, 8, 10, 12, 14, 16, 18, 20],
            'target' => 20,
            'expected' => 9,
        ],
        [
            'name' => 'Example 5: 要素が1つだけ（見つかる）',
            'nums' => [5],
            'target' => 5,
            'expected' => 0,
        ],
        [
            'name' => '要素が1つだけ（見つからない）',
            'nums' => [5],
            'target' => 3,
            'expected' => -1,
        ],
        [
            'name' => '負の数を含む配列',
            'nums' => [-10, -5, 0, 5, 10],
            'target' => -5,
            'expected' => 1,
        ],
        [
            'name' => '中央の値',
            'nums' => [1, 2, 3, 4, 5, 6, 7],
            'target' => 4,
            'expected' => 3,
        ],
        [
            'name' => 'target が最小値より小さい',
            'nums' => [10, 20, 30, 40, 50],
            'target' => 5,
            'expected' => -1,
        ],
        [
            'name' => 'target が最大値より大きい',
            'nums' => [10, 20, 30, 40, 50],
            'target' => 100,
            'expected' => -1,
        ],
        [
            'name' => '大きな配列での検索',
            'nums' => range(1, 1000),
            'target' => 777,
            'expected' => 776,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 二分探索問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['nums'], $testCase['target']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   配列サイズ: " . count($testCase['nums']) . "\n";
            echo "   target: {$testCase['target']}\n";
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
