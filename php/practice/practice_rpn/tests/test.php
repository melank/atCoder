<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的な計算',
            'input' => ['2', '1', '+', '3', '*'],
            'expected' => 9,
        ],
        [
            'name' => 'Example 2: 除算を含む',
            'input' => ['4', '13', '5', '/', '+'],
            'expected' => 6,
        ],
        [
            'name' => 'Example 3: 複雑な計算',
            'input' => ['10', '6', '9', '3', '+', '-11', '*', '/', '*', '17', '+', '5', '+'],
            'expected' => 22,
        ],
        [
            'name' => 'Example 4: シンプルな加算',
            'input' => ['3', '4', '+'],
            'expected' => 7,
        ],
        [
            'name' => 'Example 5: 数字のみ',
            'input' => ['5'],
            'expected' => 5,
        ],
        [
            'name' => '減算',
            'input' => ['10', '3', '-'],
            'expected' => 7,
        ],
        [
            'name' => '乗算',
            'input' => ['6', '7', '*'],
            'expected' => 42,
        ],
        [
            'name' => '負の数を含む',
            'input' => ['-5', '3', '+'],
            'expected' => -2,
        ],
        [
            'name' => '負の除算（0に向かって切り捨て）',
            'input' => ['7', '-2', '/'],
            'expected' => -3,
        ],
        [
            'name' => '連続した演算',
            'input' => ['1', '2', '+', '3', '+', '4', '+'],
            'expected' => 10,
        ],
        [
            'name' => 'ゼロの計算',
            'input' => ['0', '5', '+'],
            'expected' => 5,
        ],
        [
            'name' => '掛け算と足し算の組み合わせ',
            'input' => ['2', '3', '*', '4', '+'],
            'expected' => 10,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 逆ポーランド記法の計算問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
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
