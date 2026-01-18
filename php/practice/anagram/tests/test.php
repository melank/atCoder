<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的なアナグラム',
            's' => 'anagram',
            't' => 'nagaram',
            'expected' => true,
        ],
        [
            'name' => 'Example 2: アナグラムではない',
            's' => 'rat',
            't' => 'car',
            'expected' => false,
        ],
        [
            'name' => 'Example 3: listen/silent',
            's' => 'listen',
            't' => 'silent',
            'expected' => true,
        ],
        [
            'name' => 'Example 4: 全く異なる',
            's' => 'hello',
            't' => 'world',
            'expected' => false,
        ],
        [
            'name' => 'Example 5: 1文字で同じ',
            's' => 'a',
            't' => 'a',
            'expected' => true,
        ],
        [
            'name' => 'Example 6: 長さが異なる',
            's' => 'ab',
            't' => 'a',
            'expected' => false,
        ],
        [
            'name' => '同じ文字列',
            's' => 'abcdef',
            't' => 'abcdef',
            'expected' => true,
        ],
        [
            'name' => '逆順',
            's' => 'abcd',
            't' => 'dcba',
            'expected' => true,
        ],
        [
            'name' => '重複文字あり（アナグラム）',
            's' => 'aabb',
            't' => 'abab',
            'expected' => true,
        ],
        [
            'name' => '重複文字あり（アナグラムではない）',
            's' => 'aabb',
            't' => 'aaab',
            'expected' => false,
        ],
        [
            'name' => '長い文字列',
            's' => str_repeat('abc', 100),
            't' => str_repeat('bca', 100),
            'expected' => true,
        ],
        [
            'name' => '空に近い（1文字ずつ）',
            's' => 'x',
            't' => 'y',
            'expected' => false,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== アナグラム判定問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['s'], $testCase['t']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   s: \"{$testCase['s']}\"\n";
            echo "   t: \"{$testCase['t']}\"\n";
            echo "   期待値: " . ($testCase['expected'] ? 'true' : 'false') . "\n";
            echo "   実際の値: " . ($result ? 'true' : 'false') . "\n";
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
