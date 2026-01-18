<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 連続した重複',
            'intervals' => [[1, 2], [2, 3], [3, 4]],
            'expected' => [[1, 4]],
        ],
        [
            'name' => 'Example 2: 部分的な重複',
            'intervals' => [[1, 3], [2, 4], [5, 7]],
            'expected' => [[1, 4], [5, 7]],
        ],
        [
            'name' => 'Example 3: 端点が一致',
            'intervals' => [[1, 4], [4, 5]],
            'expected' => [[1, 5]],
        ],
        [
            'name' => 'Example 4: 全て独立（未ソート）',
            'intervals' => [[1, 2], [5, 6], [3, 4]],
            'expected' => [[1, 2], [3, 4], [5, 6]],
        ],
        [
            'name' => 'Example 5: 全て包含',
            'intervals' => [[1, 10], [2, 3], [4, 5], [6, 7]],
            'expected' => [[1, 10]],
        ],
        [
            'name' => 'Example 6: 1つだけ',
            'intervals' => [[5, 7]],
            'expected' => [[5, 7]],
        ],
        [
            'name' => 'Example 7: 空配列',
            'intervals' => [],
            'expected' => [],
        ],
        [
            'name' => '同じ start で複数の区間',
            'intervals' => [[1, 3], [1, 5], [1, 2]],
            'expected' => [[1, 5]],
        ],
        [
            'name' => '最大値付近',
            'intervals' => [[9998, 9999], [9999, 10000]],
            'expected' => [[9998, 10000]],
        ],
        [
            'name' => '0から始まる',
            'intervals' => [[0, 5], [3, 10]],
            'expected' => [[0, 10]],
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 区間マージ（バケットソート版）テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $intervals = $testCase['intervals'];
        $result = solution($intervals);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['intervals']) . "\n";
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
