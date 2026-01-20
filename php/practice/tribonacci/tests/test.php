<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        // [input, expected]
        [0, 0],
        [1, 1],
        [2, 1],
        [3, 2],
        [4, 4],
        [5, 7],
        [6, 13],
        [7, 24],
        [8, 44],
        [9, 81],
        [10, 149],
        [20, 66012],
    ];

    $passed = 0;
    $failed = 0;

    foreach ($testCases as $index => [$n, $expected]) {
        $result = solution($n);
        if ($result === $expected) {
            echo "✓ Test " . ($index + 1) . " passed\n";
            $passed++;
        } else {
            echo "✗ Test " . ($index + 1) . " failed\n";
            echo "  Input: n = $n\n";
            echo "  Expected: $expected\n";
            echo "  Got: $result\n";
            $failed++;
        }
    }

    echo "\n$passed passed, $failed failed\n";
}

runTests();
