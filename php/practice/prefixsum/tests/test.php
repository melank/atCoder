<?php

require_once __DIR__ . '/../main.php';

/**
 * テストケースを実行する
 */
function runTests(): void {
    $passed = 0;
    $failed = 0;

    echo "=== 区間和クエリ問題 テスト ===\n\n";

    // テストケース1: 基本的な正の数
    $nums1 = [1, 2, 3, 4, 5];
    $rs1 = new RangeSum($nums1);

    $tests = [
        ['name' => '基本: 先頭3要素', 'obj' => $rs1, 'left' => 0, 'right' => 2, 'expected' => 6],
        ['name' => '基本: 中間3要素', 'obj' => $rs1, 'left' => 1, 'right' => 3, 'expected' => 9],
        ['name' => '基本: 全要素', 'obj' => $rs1, 'left' => 0, 'right' => 4, 'expected' => 15],
        ['name' => '基本: 1要素のみ', 'obj' => $rs1, 'left' => 2, 'right' => 2, 'expected' => 3],
        ['name' => '基本: 末尾2要素', 'obj' => $rs1, 'left' => 3, 'right' => 4, 'expected' => 9],
    ];

    // テストケース2: 負の数を含む
    $nums2 = [-2, 0, 3, -5, 2, -1];
    $rs2 = new RangeSum($nums2);

    $tests = array_merge($tests, [
        ['name' => '負の数: 先頭3要素', 'obj' => $rs2, 'left' => 0, 'right' => 2, 'expected' => 1],
        ['name' => '負の数: 後半4要素', 'obj' => $rs2, 'left' => 2, 'right' => 5, 'expected' => -1],
        ['name' => '負の数: 全要素', 'obj' => $rs2, 'left' => 0, 'right' => 5, 'expected' => -3],
    ]);

    // テストケース3: 要素が1つ
    $nums3 = [42];
    $rs3 = new RangeSum($nums3);

    $tests = array_merge($tests, [
        ['name' => '1要素: 全体', 'obj' => $rs3, 'left' => 0, 'right' => 0, 'expected' => 42],
    ]);

    // テストケース4: すべてゼロ
    $nums4 = [0, 0, 0, 0, 0];
    $rs4 = new RangeSum($nums4);

    $tests = array_merge($tests, [
        ['name' => 'ゼロ配列: 全体', 'obj' => $rs4, 'left' => 0, 'right' => 4, 'expected' => 0],
    ]);

    // テストケース5: 大きな配列
    $nums5 = range(1, 100);
    $rs5 = new RangeSum($nums5);

    $tests = array_merge($tests, [
        ['name' => '大きな配列: 全体', 'obj' => $rs5, 'left' => 0, 'right' => 99, 'expected' => 5050],
        ['name' => '大きな配列: 先頭10要素', 'obj' => $rs5, 'left' => 0, 'right' => 9, 'expected' => 55],
    ]);

    foreach ($tests as $test) {
        $result = $test['obj']->sumRange($test['left'], $test['right']);
        $isPass = $result === $test['expected'];

        if ($isPass) {
            echo "✅ PASS: {$test['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$test['name']}\n";
            echo "   範囲: [{$test['left']}, {$test['right']}]\n";
            echo "   期待値: {$test['expected']}\n";
            echo "   実際の値: {$result}\n";
            $failed++;
        }
    }

    echo "\n=== 結果 ===\n";
    echo "合計: " . count($tests) . " テスト\n";
    echo "成功: {$passed}\n";
    echo "失敗: {$failed}\n";

    if ($failed === 0) {
        echo "\n🎉 すべてのテストに合格しました！\n";
    } else {
        echo "\n⚠️  {$failed} 個のテストが失敗しています。\n";
    }
}

runTests();
