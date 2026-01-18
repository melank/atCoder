<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 複雑な交差',
            'firstList' => [[0, 2], [5, 10], [13, 23], [24, 25]],
            'secondList' => [[1, 5], [8, 12], [15, 24], [25, 26]],
            'expected' => [[1, 2], [5, 5], [8, 10], [15, 23], [24, 24], [25, 25]],
        ],
        [
            'name' => 'Example 2: 一方が空',
            'firstList' => [[1, 3], [5, 9]],
            'secondList' => [],
            'expected' => [],
        ],
        [
            'name' => 'Example 3: シンプルな交差',
            'firstList' => [[1, 7]],
            'secondList' => [[3, 10]],
            'expected' => [[3, 7]],
        ],
        [
            'name' => 'Example 4: 交互の交差',
            'firstList' => [[1, 3], [5, 7], [9, 11]],
            'secondList' => [[2, 4], [6, 8], [10, 12]],
            'expected' => [[2, 3], [6, 7], [10, 11]],
        ],
        [
            'name' => 'Example 5: 完全に含まれる',
            'firstList' => [[1, 5]],
            'secondList' => [[2, 3]],
            'expected' => [[2, 3]],
        ],
        [
            'name' => 'Example 6: 交差なし',
            'firstList' => [[1, 2], [5, 6]],
            'secondList' => [[3, 4], [7, 8]],
            'expected' => [],
        ],
        [
            'name' => 'Example 7: 完全一致',
            'firstList' => [[0, 5]],
            'secondList' => [[0, 5]],
            'expected' => [[0, 5]],
        ],
        [
            'name' => '両方とも空',
            'firstList' => [],
            'secondList' => [],
            'expected' => [],
        ],
        [
            'name' => '端点のみ交差',
            'firstList' => [[1, 3]],
            'secondList' => [[3, 5]],
            'expected' => [[3, 3]],
        ],
        [
            'name' => '1つが複数と交差',
            'firstList' => [[0, 10]],
            'secondList' => [[1, 2], [3, 4], [5, 6]],
            'expected' => [[1, 2], [3, 4], [5, 6]],
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 区間の交差問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['firstList'], $testCase['secondList']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   firstList: " . json_encode($testCase['firstList']) . "\n";
            echo "   secondList: " . json_encode($testCase['secondList']) . "\n";
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
