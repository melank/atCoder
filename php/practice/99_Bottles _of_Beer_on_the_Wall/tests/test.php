<?php

require_once __DIR__ . '/../main.php';

/**
 * 期待される歌詞を生成する
 */
function generateExpectedLyrics(): string {
    $lines = [];
    
    for ($i = 99; $i >= 1; $i--) {
        $current = $i;
        $next = $i - 1;
        
        $currentBottles = $current === 1 ? "1 bottle" : "{$current} bottles";
        
        if ($next === 0) {
            $nextBottles = "no more bottles";
        } elseif ($next === 1) {
            $nextBottles = "1 bottle";
        } else {
            $nextBottles = "{$next} bottles";
        }
        
        $lines[] = "{$currentBottles} of beer on the wall, {$currentBottles} of beer.";
        $lines[] = "Take one down and pass it around, {$nextBottles} of beer on the wall.";
        $lines[] = "";
    }
    
    // 最後の節
    $lines[] = "No more bottles of beer on the wall, no more bottles of beer.";
    $lines[] = "Go to the store and buy some more, 99 bottles of beer on the wall.";
    
    return implode("\n", $lines);
}

/**
 * テストケースを実行する
 */
function runTests(): void {
    echo "=== 99 Bottles of Beer on the Wall テスト ===\n\n";
    
    $passed = 0;
    $failed = 0;
    $testCases = [];
    
    // 完全な歌詞を取得
    $result = solution();
    $expected = generateExpectedLyrics();
    
    // テスト1: 完全一致
    $testCases[] = [
        'name' => '完全な歌詞の出力',
        'check' => fn() => $result === $expected,
        'debug' => function() use ($result, $expected) {
            $resultLines = explode("\n", $result);
            $expectedLines = explode("\n", $expected);
            echo "   結果の行数: " . count($resultLines) . "\n";
            echo "   期待の行数: " . count($expectedLines) . "\n";
            
            // 最初に異なる行を表示
            for ($i = 0; $i < min(count($resultLines), count($expectedLines)); $i++) {
                if ($resultLines[$i] !== $expectedLines[$i]) {
                    echo "   最初の差異: 行 " . ($i + 1) . "\n";
                    echo "   期待: \"{$expectedLines[$i]}\"\n";
                    echo "   実際: \"{$resultLines[$i]}\"\n";
                    break;
                }
            }
        }
    ];
    
    // テスト2: 99から始まる
    $testCases[] = [
        'name' => '99から始まる',
        'check' => fn() => str_starts_with($result, "99 bottles of beer on the wall, 99 bottles of beer."),
        'debug' => function() use ($result) {
            $firstLine = explode("\n", $result)[0] ?? '';
            echo "   最初の行: \"{$firstLine}\"\n";
        }
    ];
    
    // テスト3: 複数形の使用（99本の場合）
    $testCases[] = [
        'name' => '複数形 bottles の使用（2本以上）',
        'check' => fn() => str_contains($result, "99 bottles") && str_contains($result, "50 bottles"),
        'debug' => fn() => null
    ];
    
    // テスト4: 単数形の使用（1本の場合）
    $testCases[] = [
        'name' => '単数形 bottle の使用（1本）',
        'check' => fn() => str_contains($result, "1 bottle of beer on the wall, 1 bottle of beer."),
        'debug' => function() use ($result) {
            if (preg_match('/1 bottle[s]? of beer/', $result, $matches)) {
                echo "   マッチした部分: \"{$matches[0]}\"\n";
            }
        }
    ];
    
    // テスト5: 2→1への移行
    $testCases[] = [
        'name' => '2本→1本への移行',
        'check' => fn() => str_contains($result, "Take one down and pass it around, 1 bottle of beer on the wall."),
        'debug' => fn() => null
    ];
    
    // テスト6: 1→0への移行（no more）
    $testCases[] = [
        'name' => '1本→0本への移行（no more bottles）',
        'check' => fn() => str_contains($result, "Take one down and pass it around, no more bottles of beer on the wall."),
        'debug' => fn() => null
    ];
    
    // テスト7: 最後の節
    $testCases[] = [
        'name' => '最後の節（No more から始まる）',
        'check' => fn() => str_contains($result, "No more bottles of beer on the wall, no more bottles of beer."),
        'debug' => fn() => null
    ];
    
    // テスト8: 最後の行（store に行く）
    $testCases[] = [
        'name' => '最後の行（Go to the store...）',
        'check' => fn() => str_ends_with(trim($result), "Go to the store and buy some more, 99 bottles of beer on the wall."),
        'debug' => function() use ($result) {
            $lines = explode("\n", trim($result));
            $lastLine = end($lines);
            echo "   最後の行: \"{$lastLine}\"\n";
        }
    ];
    
    // テスト9: 行数の確認（99節 × 3行 + 最後の2行 = 299行）
    $testCases[] = [
        'name' => '正しい行数（299行）',
        'check' => fn() => count(explode("\n", $result)) === 299,
        'debug' => function() use ($result) {
            echo "   実際の行数: " . count(explode("\n", $result)) . "\n";
        }
    ];
    
    // テスト10: 空行の確認（各節の間に空行がある）
    $testCases[] = [
        'name' => '節の間に空行がある',
        'check' => function() use ($result) {
            $lines = explode("\n", $result);
            // 3行目（インデックス2）は空行であるべき
            return isset($lines[2]) && $lines[2] === '';
        },
        'debug' => function() use ($result) {
            $lines = explode("\n", $result);
            echo "   3行目: \"" . ($lines[2] ?? 'undefined') . "\"\n";
        }
    ];
    
    // テスト実行
    foreach ($testCases as $testCase) {
        $isPass = $testCase['check']();
        
        if ($isPass) {
            echo "✅ PASS: {$testCase['name']}\n";
            $passed++;
        } else {
            echo "❌ FAIL: {$testCase['name']}\n";
            $testCase['debug']();
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
