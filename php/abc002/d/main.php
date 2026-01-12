<?php

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

function getIntArray(): array {
    return array_map('intval', explode(' ', getLine()));
}

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}

// Main
function solve(): void {
    // Write your solution here
    [$n, $m] = getIntArray();

    if ($m === 0) {
        printResult(1);
        return;
    }

    $isFriend = array_fill(1, $n, array_fill(1, $n, false));

    for ($i = 1; $i <= $m; $i++) {
        [$x, $y] = $intervals[$i] ?? getIntArray(); // 以前のループとの互換性のため
        if (!isset($x)) break;
        $isFriend[$x][$y] = true;
        $isFriend[$y][$x] = true;
    }

    $maxClique = 1;

    // ビット全探索: 1 から 2^N - 1 まで
    for ($mask = 1; $mask < (1 << $n); $mask++) {
        $group = [];
        for ($i = 0; $i < $n; $i++) {
            if (($mask >> $i) & 1) {
                $group[] = $i + 1; // 議員番号は 1-indexed
            }
        }

        $count = count($group);
        if ($count <= $maxClique) continue;

        // 全員が互いに知り合いかチェック
        $isAllFriends = true;
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if (!$isFriend[$group[$i]][$group[$j]]) {
                    $isAllFriends = false;
                    break 2;
                }
            }
        }

        if ($isAllFriends) {
            $maxClique = $count;
        }
    }

    printResult($maxClique);
}

solve();
