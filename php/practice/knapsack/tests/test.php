<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本ケース',
            'capacity' => 10,
            'weights' => [2, 3, 4, 5],
            'values' => [3, 4, 5, 6],
            'expected' => 13,
        ],
        [
            'name' => 'Example 2: ちょうど容量',
            'capacity' => 7,
            'weights' => [3, 4, 2],
            'values' => [4, 5, 3],
            'expected' => 9,
        ],
        [
            'name' => 'Example 3: 何も入らない',
            'capacity' => 5,
            'weights' => [6, 7, 8],
            'values' => [10, 20, 30],
            'expected' => 0,
        ],
        [
            'name' => 'Example 4: 大きめの容量',
            'capacity' => 50,
            'weights' => [10, 20, 30],
            'values' => [60, 100, 120],
            'expected' => 220,
        ],
        [
            'name' => 'Example 5: 1アイテム',
            'capacity' => 10,
            'weights' => [5],
            'values' => [10],
            'expected' => 10,
        ],
        [
            'name' => '全部入る',
            'capacity' => 100,
            'weights' => [10, 20, 30],
            'values' => [10, 20, 30],
            'expected' => 60,
        ],
        [
            'name' => '容量0',
            'capacity' => 0,
            'weights' => [1, 2, 3],
            'values' => [10, 20, 30],
            'expected' => 0,
        ],
        [
            'name' => '重さ1のアイテム',
            'capacity' => 5,
            'weights' => [1, 1, 1, 1, 1, 1],
            'values' => [1, 2, 3, 4, 5, 6],
            'expected' => 20,  // 2+3+4+5+6 = 20
        ],
        [
            'name' => '価値と重さが同じ',
            'capacity' => 15,
            'weights' => [5, 10, 15],
            'values' => [5, 10, 15],
            'expected' => 15,
        ],
        [
            'name' => '貪欲法だと失敗するケース',
            'capacity' => 10,
            'weights' => [6, 5, 5],
            'values' => [7, 5, 5],
            // 貪欲法（価値/重さ順）だとアイテム0を選んで価値7
            // 最適解はアイテム1と2を選んで価値10
            'expected' => 10,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== ナップサック問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution(
            $testCase['capacity'],
            $testCase['weights'],
            $testCase['values']
        );
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   容量: {$testCase['capacity']}\n";
            echo "   重さ: [" . implode(', ', $testCase['weights']) . "]\n";
            echo "   価値: [" . implode(', ', $testCase['values']) . "]\n";
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
