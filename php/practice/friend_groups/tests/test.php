<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '例1: 2つのグループ',
            'n' => 5,
            'edges' => [[1, 2], [3, 4], [4, 5]],
            'expected' => 2,
        ],
        [
            'name' => '例2: 友達関係なし（全員別グループ）',
            'n' => 4,
            'edges' => [],
            'expected' => 4,
        ],
        [
            'name' => '例3: 全員が一列につながる',
            'n' => 6,
            'edges' => [[1, 2], [2, 3], [3, 4], [4, 5], [5, 6]],
            'expected' => 1,
        ],
        [
            'name' => '1人だけ',
            'n' => 1,
            'edges' => [],
            'expected' => 1,
        ],
        [
            'name' => '2人が友達',
            'n' => 2,
            'edges' => [[1, 2]],
            'expected' => 1,
        ],
        [
            'name' => '3つの独立したペア',
            'n' => 6,
            'edges' => [[1, 2], [3, 4], [5, 6]],
            'expected' => 3,
        ],
        [
            'name' => '完全グラフ（全員が友達）',
            'n' => 4,
            'edges' => [[1, 2], [1, 3], [1, 4], [2, 3], [2, 4], [3, 4]],
            'expected' => 1,
        ],
        [
            'name' => '孤立した1人 + 3人グループ',
            'n' => 4,
            'edges' => [[1, 2], [2, 3]],
            'expected' => 2,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 友達グループ テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['n'], $testCase['edges']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   N: {$testCase['n']}\n";
            echo "   辺: " . json_encode($testCase['edges']) . "\n";
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
