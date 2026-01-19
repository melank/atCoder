<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        [
            'name' => '有名な回文（Panama）',
            'input' => 'A man, a plan, a canal: Panama',
            'expected' => true,
        ],
        [
            'name' => '回文ではない',
            'input' => 'race a car',
            'expected' => false,
        ],
        [
            'name' => '空白のみ',
            'input' => ' ',
            'expected' => true,
        ],
        [
            'name' => '別の有名な回文',
            'input' => 'Was it a car or a cat I saw?',
            'expected' => true,
        ],
        [
            'name' => '数字の回文',
            'input' => '12321',
            'expected' => true,
        ],
        [
            'name' => '数字を含む回文',
            'input' => 'A1B2B1A',
            'expected' => true,
        ],
        [
            'name' => '1文字',
            'input' => 'a',
            'expected' => true,
        ],
        [
            'name' => '2文字（同じ）',
            'input' => 'aa',
            'expected' => true,
        ],
        [
            'name' => '2文字（異なる）',
            'input' => 'ab',
            'expected' => false,
        ],
        [
            'name' => '記号のみ',
            'input' => '.,!?',
            'expected' => true,
        ],
        [
            'name' => '大文字小文字混在',
            'input' => 'AbBa',
            'expected' => true,
        ],
        [
            'name' => '日本語風だが英数字抽出後は回文',
            'input' => '!!!racecar!!!',
            'expected' => true,
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 回文判定 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['input']);
        $isPass = $result === $testCase['expected'];

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   入力: \"{$testCase['input']}\"\n";
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
