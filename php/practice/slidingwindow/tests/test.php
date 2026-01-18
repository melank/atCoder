<?php

require_once __DIR__ . '/../main.php';

/**
 * 浮動小数点の比較（許容誤差あり）
 */
function floatEquals(float $a, float $b, float $epsilon = 0.00001): bool {
    return abs($a - $b) < $epsilon;
}

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的なケース',
            'nums' => [1, 12, -5, -6, 50, 3],
            'k' => 4,
            'expected' => 12.75,
        ],
        [
            'name' => 'Example 2: 1要素',
            'nums' => [5],
            'k' => 1,
            'expected' => 5.0,
        ],
        [
            'name' => 'Example 3: 末尾が最大',
            'nums' => [1, 2, 3, 4, 5],
            'k' => 3,
            'expected' => 4.0,
        ],
        [
            'name' => 'Example 4: 小さなケース',
            'nums' => [0, 1, 1, 3, 3],
            'k' => 4,
            'expected' => 2.0,
        ],
        [
            'name' => 'Example 5: すべて負の数',
            'nums' => [-1, -2, -3, -4, -5],
            'k' => 2,
            'expected' => -1.5,
        ],
        [
            'name' => '配列全体',
            'nums' => [1, 2, 3, 4, 5],
            'k' => 5,
            'expected' => 3.0,
        ],
        [
            'name' => 'k=1（各要素の最大値）',
            'nums' => [3, 1, 4, 1, 5, 9, 2, 6],
            'k' => 1,
            'expected' => 9.0,
        ],
        [
            'name' => '先頭が最大',
            'nums' => [10, 9, 8, 1, 2, 3],
            'k' => 3,
            'expected' => 9.0,
        ],
        [
            'name' => 'すべて同じ値',
            'nums' => [5, 5, 5, 5, 5],
            'k' => 3,
            'expected' => 5.0,
        ],
        [
            'name' => '大きな配列',
            'nums' => range(1, 100),
            'k' => 10,
            'expected' => 95.5,  // [91..100] の平均
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 長さKの部分配列の最大平均値 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['nums'], $testCase['k']);
        $isPass = floatEquals($result, $testCase['expected']);

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   配列サイズ: " . count($testCase['nums']) . ", k: {$testCase['k']}\n";
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
