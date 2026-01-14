<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的なケース',
            'input' => [[1, 3], [2, 4], [3, 5]],
            'expected' => 2,
        ],
        [
            'name' => 'Example 2: 短い会議を選ぶと多く参加できる',
            'input' => [[1, 2], [2, 3], [3, 4], [1, 4]],
            'expected' => 3,
        ],
        [
            'name' => 'Example 3: 順序がバラバラ',
            'input' => [[7, 9], [0, 3], [2, 5], [4, 6]],
            'expected' => 3,
        ],
        [
            'name' => 'Example 4: 会議が1つだけ',
            'input' => [[1, 10]],
            'expected' => 1,
        ],
        [
            'name' => '会議がすべて重なっている',
            'input' => [[0, 10], [1, 9], [2, 8], [3, 7]],
            'expected' => 1,
        ],
        [
            'name' => '会議がすべて連続している',
            'input' => [[0, 1], [1, 2], [2, 3], [3, 4], [4, 5]],
            'expected' => 5,
        ],
        [
            'name' => '同じ会議が複数ある',
            'input' => [[1, 2], [1, 2], [1, 2]],
            'expected' => 1,
        ],
        [
            'name' => '終了時刻と開始時刻が同じ（境界）',
            'input' => [[0, 5], [5, 10], [10, 15]],
            'expected' => 3,
        ],
        [
            'name' => '複雑なケース',
            'input' => [[1, 4], [2, 3], [3, 5], [0, 6], [5, 7], [8, 9], [5, 9]],
            'expected' => 4, // [2,3], [3,5], [5,7], [8,9] または [2,3], [3,5], [5,9] ではなく4つ
        ],
        [
            'name' => '大きな値のケース',
            'input' => [[0, 100], [100, 200], [200, 10000]],
            'expected' => 3,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 会議室スケジューリング問題 テスト ===\n\n";

    foreach ($testCases as $i => $testCase) {
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
