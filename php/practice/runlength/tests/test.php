<?php

$GLOBALS['TESTING'] = true;
require_once __DIR__ . '/../main.php';

function runTests(): void {
    // 手計算で検証済みのテストケース
    $testCases = [
        [
            'name' => '基本ケース: aaabbc',
            'input' => 'aaabbc',
            'expected' => 'a3b2c1',
            // a:3回, b:2回, c:1回
        ],
        [
            'name' => '1文字のみ',
            'input' => 'a',
            'expected' => 'a1',
            // a:1回
        ],
        [
            'name' => 'すべて異なる文字',
            'input' => 'abcde',
            'expected' => 'a1b1c1d1e1',
            // 各文字1回ずつ
        ],
        [
            'name' => '同じ文字のみ',
            'input' => 'aaaaaa',
            'expected' => 'a6',
            // a:6回
        ],
        [
            'name' => '途中で文字が変わる（同じ文字が再度出現）',
            'input' => 'aabbccaabb',
            'expected' => 'a2b2c2a2b2',
            // a:2回, b:2回, c:2回, a:2回, b:2回
        ],
        [
            'name' => '2文字交互',
            'input' => 'ababab',
            'expected' => 'a1b1a1b1a1b1',
            // 交互なので各1回ずつ
        ],
        [
            'name' => '長い連続',
            'input' => 'aaaaaaaaaa',
            'expected' => 'a10',
            // a:10回
        ],
        [
            'name' => '2種類の文字',
            'input' => 'aaabbb',
            'expected' => 'a3b3',
            // a:3回, b:3回
        ],
        [
            'name' => '末尾に連続',
            'input' => 'abccc',
            'expected' => 'a1b1c3',
            // a:1回, b:1回, c:3回
        ],
        [
            'name' => '先頭に連続',
            'input' => 'aaabc',
            'expected' => 'a3b1c1',
            // a:3回, b:1回, c:1回
        ],
        [
            'name' => '全アルファベット1文字ずつ',
            'input' => 'abcdefghij',
            'expected' => 'a1b1c1d1e1f1g1h1i1j1',
            // 各1回
        ],
        [
            'name' => '複雑なパターン',
            'input' => 'aabbbccccbbbaa',
            'expected' => 'a2b3c4b3a2',
            // a:2回, b:3回, c:4回, b:3回, a:2回
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== ランレングス圧縮 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: \"{$testCase['input']}\"\n";
            echo "   期待値: \"{$testCase['expected']}\"\n";
            echo "   実際の値: \"{$result}\"\n";
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
