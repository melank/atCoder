<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 先頭の区間と重複',
            'intervals' => [[1, 3], [6, 9]],
            'newInterval' => [2, 5],
            'expected' => [[1, 5], [6, 9]],
        ],
        [
            'name' => 'Example 2: 複数の区間と重複',
            'intervals' => [[1, 2], [3, 5], [6, 7], [8, 10], [12, 16]],
            'newInterval' => [4, 8],
            'expected' => [[1, 2], [3, 10], [12, 16]],
        ],
        [
            'name' => 'Example 3: 空のリスト',
            'intervals' => [],
            'newInterval' => [5, 7],
            'expected' => [[5, 7]],
        ],
        [
            'name' => 'Example 4: 完全に含まれる',
            'intervals' => [[1, 5]],
            'newInterval' => [2, 3],
            'expected' => [[1, 5]],
        ],
        [
            'name' => 'Example 5: 重複なし（後ろに追加）',
            'intervals' => [[1, 5]],
            'newInterval' => [6, 8],
            'expected' => [[1, 5], [6, 8]],
        ],
        [
            'name' => 'Example 6: 点としての区間',
            'intervals' => [[3, 5], [12, 15]],
            'newInterval' => [6, 6],
            'expected' => [[3, 5], [6, 6], [12, 15]],
        ],
        [
            'name' => '重複なし（前に追加）',
            'intervals' => [[3, 5], [6, 9]],
            'newInterval' => [1, 2],
            'expected' => [[1, 2], [3, 5], [6, 9]],
        ],
        [
            'name' => '全ての区間を包含',
            'intervals' => [[2, 3], [4, 5], [6, 7]],
            'newInterval' => [1, 10],
            'expected' => [[1, 10]],
        ],
        [
            'name' => '端点で接続',
            'intervals' => [[1, 2], [5, 6]],
            'newInterval' => [2, 5],
            'expected' => [[1, 6]],
        ],
        [
            'name' => '中間に挿入（重複なし）',
            'intervals' => [[1, 2], [8, 9]],
            'newInterval' => [4, 6],
            'expected' => [[1, 2], [4, 6], [8, 9]],
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 区間の挿入問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['intervals'], $testCase['newInterval']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   intervals: " . json_encode($testCase['intervals']) . "\n";
            echo "   newInterval: " . json_encode($testCase['newInterval']) . "\n";
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
