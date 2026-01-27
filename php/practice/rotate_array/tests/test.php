<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '基本ケース: 2ステップ回転',
            'input' => ['nums' => [1, 2, 3, 4, 5], 'k' => 2],
            'expected' => [4, 5, 1, 2, 3],
        ],
        [
            'name' => '1ステップ回転',
            'input' => ['nums' => [1, 2, 3], 'k' => 1],
            'expected' => [3, 1, 2],
        ],
        [
            'name' => '配列長と同じ回転（元に戻る）',
            'input' => ['nums' => [1, 2, 3], 'k' => 3],
            'expected' => [1, 2, 3],
        ],
        [
            'name' => '配列長より大きいk',
            'input' => ['nums' => [1, 2, 3], 'k' => 4],
            'expected' => [3, 1, 2],
        ],
        [
            'name' => '要素が1つ',
            'input' => ['nums' => [1], 'k' => 5],
            'expected' => [1],
        ],
        [
            'name' => 'k=0（回転なし）',
            'input' => ['nums' => [1, 2, 3, 4], 'k' => 0],
            'expected' => [1, 2, 3, 4],
        ],
        [
            'name' => '要素が2つ',
            'input' => ['nums' => [1, 2], 'k' => 1],
            'expected' => [2, 1],
        ],
        [
            'name' => '負の値を含む配列',
            'input' => ['nums' => [-1, -100, 3, 99], 'k' => 2],
            'expected' => [3, 99, -1, -100],
        ],
        [
            'name' => '大きなk（配列長の倍数+1）',
            'input' => ['nums' => [1, 2, 3, 4, 5], 'k' => 11],
            'expected' => [5, 1, 2, 3, 4],
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 配列の回転 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']['nums'], $testCase['input']['k']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: nums=" . json_encode($testCase['input']['nums']) . ", k=" . $testCase['input']['k'] . "\n";
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
