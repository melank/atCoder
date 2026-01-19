<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 2部屋必要',
            'intervals' => [[0, 30], [5, 10], [15, 20]],
            'expected' => 2,
        ],
        [
            'name' => 'Example 2: 重ならない',
            'intervals' => [[7, 10], [2, 4]],
            'expected' => 1,
        ],
        [
            'name' => 'Example 3: 全て重なる',
            'intervals' => [[1, 5], [2, 6], [3, 7]],
            'expected' => 3,
        ],
        [
            'name' => 'Example 4: 端点で接続',
            'intervals' => [[1, 2], [2, 3], [3, 4]],
            'expected' => 1,
        ],
        [
            'name' => 'Example 5: 長い会議と短い会議',
            'intervals' => [[1, 10], [2, 3], [4, 5], [6, 7]],
            'expected' => 2,
        ],
        [
            'name' => 'Example 6: 空配列',
            'intervals' => [],
            'expected' => 0,
        ],
        [
            'name' => '1つの会議',
            'intervals' => [[1, 5]],
            'expected' => 1,
        ],
        [
            'name' => '完全に含まれる',
            'intervals' => [[1, 10], [2, 3], [4, 5]],
            'expected' => 2,
        ],
        [
            'name' => '4部屋必要',
            'intervals' => [[1, 5], [2, 5], [3, 5], [4, 5]],
            'expected' => 4,
        ],
        [
            'name' => '同時刻に複数終了',
            'intervals' => [[1, 3], [2, 3], [3, 4], [3, 5]],
            'expected' => 2,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 会議室の最大同時使用数問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['intervals']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['intervals']) . "\n";
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
