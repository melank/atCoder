<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本ケース: 先頭に重複',
            'input' => [1, 1, 2],
            'expected' => [1, 2],
        ],
        [
            'name' => '複数の重複',
            'input' => [0, 0, 1, 1, 1, 2, 2, 3, 3, 4],
            'expected' => [0, 1, 2, 3, 4],
        ],
        [
            'name' => '重複なし',
            'input' => [1, 2, 3],
            'expected' => [1, 2, 3],
        ],
        [
            'name' => '全て同じ値',
            'input' => [5, 5, 5, 5, 5],
            'expected' => [5],
        ],
        [
            'name' => '要素が1つ',
            'input' => [1],
            'expected' => [1],
        ],
        [
            'name' => '要素が2つ（重複あり）',
            'input' => [3, 3],
            'expected' => [3],
        ],
        [
            'name' => '要素が2つ（重複なし）',
            'input' => [1, 2],
            'expected' => [1, 2],
        ],
        [
            'name' => '負の値を含む',
            'input' => [-3, -3, -1, 0, 0, 2, 2],
            'expected' => [-3, -1, 0, 2],
        ],
        [
            'name' => '末尾に重複',
            'input' => [1, 2, 3, 3, 3],
            'expected' => [1, 2, 3],
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== ソート済み配列の重複削除 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: " . json_encode($testCase['input']) . "\n";
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
