<?php

require_once __DIR__ . '/../main.php';

function runTests(): void {
    $testCases = [
        // [input, expected]
        [[1, 2, 3, 1], 4],
        [[2, 7, 9, 3, 1], 12],
        [[2, 1, 1, 2], 4],
        [[5], 5],
        [[1, 2], 2],
        [[2, 1], 2],
        [[1, 3, 1], 3],
        [[0, 0, 0], 0],
        [[100, 1, 1, 100], 200],
        [[1, 2, 3, 4, 5], 9],
    ];

    $passed = 0;
    $failed = 0;

    foreach ($testCases as $index => [$nums, $expected]) {
        $result = solution($nums);
        if ($result === $expected) {
            echo "✓ Test " . ($index + 1) . " passed\n";
            $passed++;
        } else {
            echo "✗ Test " . ($index + 1) . " failed\n";
            echo "  Input: [" . implode(', ', $nums) . "]\n";
            echo "  Expected: $expected\n";
            echo "  Got: $result\n";
            $failed++;
        }
    }

    echo "\n$passed passed, $failed failed\n";
}

runTests();
