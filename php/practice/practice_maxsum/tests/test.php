<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的なケース',
            'input' => [-2, 1, -3, 4, -1, 2, 1, -5, 4],
            'expected' => 6,
        ],
        [
            'name' => 'Example 2: 要素が1つだけ',
            'input' => [1],
            'expected' => 1,
        ],
        [
            'name' => 'Example 3: 配列全体が最大',
            'input' => [5, 4, -1, 7, 8],
            'expected' => 23,
        ],
        [
            'name' => 'Example 4: すべて負の数',
            'input' => [-1, -2, -3, -4],
            'expected' => -1,
        ],
        [
            'name' => 'Example 5: 前半と後半に同じ最大部分配列',
            'input' => [1, 2, 3, -6, 1, 2, 3],
            'expected' => 6,
        ],
        [
            'name' => 'すべて正の数',
            'input' => [1, 2, 3, 4, 5],
            'expected' => 15,
        ],
        [
            'name' => '負の数が1つだけ',
            'input' => [-5],
            'expected' => -5,
        ],
        [
            'name' => 'ゼロを含む',
            'input' => [0, -1, 2, 0, 3, -2],
            'expected' => 5,
        ],
        [
            'name' => '大きな負の数で分断',
            'input' => [2, 3, -100, 4, 5],
            'expected' => 9,
        ],
        [
            'name' => '交互に正負',
            'input' => [1, -1, 1, -1, 1, -1, 1],
            'expected' => 1,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 部分配列の最大和問題 テスト ===\n\n";

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
