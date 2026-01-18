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
            'name' => '大きな値',
            'intervals' => [[1000000, 2000000], [1500000, 2500000]],
            'expected' => [[1000000, 2500000]],
        ],
    ];

    // solution（参照渡し版）のテスト
    echo "=== solution（メモリ効率改善版）テスト ===\n\n";
    $passed1 = 0;
    $failed1 = 0;

    foreach ($testCases as $testCase) {
        $intervals = $testCase['intervals'];  // コピー
        $result = solution($intervals);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed1++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['intervals']) . "\n";
            echo "   期待値: " . json_encode($testCase['expected']) . "\n";
            echo "   実際の値: " . json_encode($result) . "\n";
            $failed1++;
        }
    }

    echo "\n成功: {$passed1} / 失敗: {$failed1}\n";

    // solutionDivideAndConquer のテスト
    echo "\n=== solutionDivideAndConquer（分割統治法）テスト ===\n\n";
    $passed2 = 0;
    $failed2 = 0;

    foreach ($testCases as $testCase) {
        $result = solutionDivideAndConquer($testCase['intervals']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed2++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['intervals']) . "\n";
            echo "   期待値: " . json_encode($testCase['expected']) . "\n";
            echo "   実際の値: " . json_encode($result) . "\n";
            $failed2++;
        }
    }

    echo "\n成功: {$passed2} / 失敗: {$failed2}\n";

    // 結果
    $totalPassed = $passed1 + $passed2;
    $totalFailed = $failed1 + $failed2;
    $total = count($testCases) * 2;

    echo "\n=== 総合結果 ===\n";
    echo "合計: {$total} テスト\n";
    echo "成功: {$totalPassed}\n";
    echo "失敗: {$totalFailed}\n";

    if ($totalFailed === 0) {
        echo "\n🎉 すべてのテストに合格しました！\n";
    } else {
        echo "\n⚠️  {$totalFailed} 個のテストが失敗しています。\n";
    }
}

runTests();
