<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 複数の空き時間',
            'schedules' => [[9, 12], [14, 16], [18, 20]],
            'expected' => [[0, 9], [12, 14], [16, 18], [20, 24]],
        ],
        [
            'name' => 'Example 2: 重複する予定',
            'schedules' => [[0, 5], [3, 10], [15, 20]],
            'expected' => [[10, 15], [20, 24]],
        ],
        [
            'name' => 'Example 3: 終日予定',
            'schedules' => [[0, 24]],
            'expected' => [],
        ],
        [
            'name' => 'Example 4: 予定なし',
            'schedules' => [],
            'expected' => [[0, 24]],
        ],
        [
            'name' => 'Example 5: 1つの予定',
            'schedules' => [[5, 10]],
            'expected' => [[0, 5], [10, 24]],
        ],
        [
            'name' => 'Example 6: 朝と夜に予定',
            'schedules' => [[0, 8], [18, 24]],
            'expected' => [[8, 18]],
        ],
        [
            'name' => 'Example 7: 未ソートで重複',
            'schedules' => [[10, 12], [8, 11], [14, 16]],
            'expected' => [[0, 8], [12, 14], [16, 24]],
        ],
        [
            'name' => '午前中のみ予定',
            'schedules' => [[0, 12]],
            'expected' => [[12, 24]],
        ],
        [
            'name' => '午後のみ予定',
            'schedules' => [[12, 24]],
            'expected' => [[0, 12]],
        ],
        [
            'name' => '細かい予定が多数',
            'schedules' => [[1, 2], [3, 4], [5, 6]],
            'expected' => [[0, 1], [2, 3], [4, 5], [6, 24]],
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 空き時間の検出問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['schedules']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['schedules']) . "\n";
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
