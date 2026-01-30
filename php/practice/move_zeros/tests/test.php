<?php

$GLOBALS['TESTING'] = true;
require_once __DIR__ . '/../main.php';

function runTests(): void {
    // 手計算で検証済みのテストケース
    $testCases = [
        [
            'name' => '基本ケース: 0 1 0 3 12',
            'input' => [0, 1, 0, 3, 12],
            'expected' => [1, 3, 12, 0, 0],
            // 0以外: 1, 3, 12 を順序保って先頭に、0を末尾に
        ],
        [
            'name' => '0のみ',
            'input' => [0],
            'expected' => [0],
            // 変化なし
        ],
        [
            'name' => '0がない',
            'input' => [1, 2, 3],
            'expected' => [1, 2, 3],
            // 変化なし
        ],
        [
            'name' => '先頭に0が集中',
            'input' => [0, 0, 0, 1],
            'expected' => [1, 0, 0, 0],
            // 1だけが先頭に
        ],
        [
            'name' => '0が散らばっている',
            'input' => [4, 0, 5, 0, 0, 6],
            'expected' => [4, 5, 6, 0, 0, 0],
            // 4, 5, 6 の順序を保持
        ],
        [
            'name' => 'すべて0',
            'input' => [0, 0, 0],
            'expected' => [0, 0, 0],
            // 変化なし
        ],
        [
            'name' => '末尾に0',
            'input' => [1, 2, 0],
            'expected' => [1, 2, 0],
            // 既に0が末尾なので変化なし
        ],
        [
            'name' => '負の数を含む',
            'input' => [-1, 0, 3, 0, -5],
            'expected' => [-1, 3, -5, 0, 0],
            // 負の数も0以外として扱う
        ],
        [
            'name' => '2要素（0と非0）',
            'input' => [0, 1],
            'expected' => [1, 0],
            // スワップ
        ],
        [
            'name' => '2要素（非0と0）',
            'input' => [1, 0],
            'expected' => [1, 0],
            // 変化なし
        ],
        [
            'name' => '大きな値',
            'input' => [1000000000, 0, -1000000000],
            'expected' => [1000000000, -1000000000, 0],
            // 大きな値でも正しく動作
        ],
        [
            'name' => '交互パターン',
            'input' => [1, 0, 2, 0, 3, 0],
            'expected' => [1, 2, 3, 0, 0, 0],
            // 1, 2, 3 の順序を保持
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== ゼロの移動 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $nums = $testCase['input'];  // コピーを作成
        solution($nums);
        $isPass = $nums === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: [" . implode(', ', $testCase['input']) . "]\n";
            echo "   期待値: [" . implode(', ', $testCase['expected']) . "]\n";
            echo "   実際の値: [" . implode(', ', $nums) . "]\n";
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
