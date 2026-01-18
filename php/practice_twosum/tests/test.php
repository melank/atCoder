<?php

require_once __DIR__ . '/../main.php';

/**
 * 結果が正しいか検証する
 * （複数の正解がある場合があるため、インデックスの値ではなく和で検証）
 */
function verifyResult(array $nums, int $target, array $result, array $expected): bool {
    // 見つからない場合
    if ($expected === [-1, -1]) {
        return $result === [-1, -1];
    }

    // 見つかった場合
    if ($result === [-1, -1]) {
        return false;
    }

    // インデックスが有効か確認
    if ($result[0] < 0 || $result[1] < 0 ||
        $result[0] >= count($nums) || $result[1] >= count($nums) ||
        $result[0] >= $result[1]) {
        return false;
    }

    // 和が正しいか確認
    return $nums[$result[0]] + $nums[$result[1]] === $target;
}

/**
 * テストケースを実行する
 */
function runTests(): void {
    $testCases = [
        [
            'name' => 'Example 1: 基本的なケース',
            'nums' => [1, 2, 3, 4, 5],
            'target' => 9,
            'expected' => [3, 4],
        ],
        [
            'name' => 'Example 2: 先頭の2つ',
            'nums' => [2, 7, 11, 15],
            'target' => 9,
            'expected' => [0, 1],
        ],
        [
            'name' => 'Example 3: ペアが存在しない',
            'nums' => [1, 2, 3, 4, 5],
            'target' => 100,
            'expected' => [-1, -1],
        ],
        [
            'name' => 'Example 4: 負の数を含む',
            'nums' => [-3, -1, 0, 2, 4, 6],
            'target' => 3,
            'expected' => [1, 4],
        ],
        [
            'name' => 'Example 5: 同じ値のペア',
            'nums' => [1, 1, 2, 3],
            'target' => 2,
            'expected' => [0, 1],
        ],
        [
            'name' => '末尾の2つ',
            'nums' => [1, 2, 3, 4, 5],
            'target' => 9,
            'expected' => [3, 4],
        ],
        [
            'name' => '要素が2つだけ（見つかる）',
            'nums' => [3, 5],
            'target' => 8,
            'expected' => [0, 1],
        ],
        [
            'name' => '要素が2つだけ（見つからない）',
            'nums' => [3, 5],
            'target' => 10,
            'expected' => [-1, -1],
        ],
        [
            'name' => 'targetが0（負と正のペア）',
            'nums' => [-5, -3, 0, 3, 5],
            'target' => 0,
            'expected' => [0, 4],  // -5 + 5 = 0 または [1, 3]
        ],
        [
            'name' => '大きな配列',
            'nums' => range(1, 100),
            'target' => 199,
            'expected' => [98, 99],  // 99 + 100 = 199
        ],
        [
            'name' => 'targetが負',
            'nums' => [-10, -5, -3, 0, 2],
            'target' => -8,
            'expected' => [0, 3],  // -10 + 2 = -8 → 実際は [0, 4]
        ],
    ];

    $passed = 0;
    $failed = 0;

    echo "=== 2つの数の和問題 テスト ===\n\n";

    foreach ($testCases as $testCase) {
        $result = solution($testCase['nums'], $testCase['target']);
        $isPass = verifyResult($testCase['nums'], $testCase['target'], $result, $testCase['expected']);

        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            echo "   配列サイズ: " . count($testCase['nums']) . "\n";
            echo "   target: {$testCase['target']}\n";
            echo "   期待値: [" . implode(', ', $testCase['expected']) . "]\n";
            echo "   実際の値: [" . implode(', ', $result) . "]\n";
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
