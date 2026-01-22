<?php

/**
 * 行列操作ヘルパー関数
 */

/**
 * 上下反転（行を逆順にする）
 * @param array $matrix 2次元配列
 * @return array
 */
function flipVertical(array $matrix): array {
    return array_reverse($matrix);
}

/**
 * 左右反転（各行を逆順にする）
 * @param array $matrix 2次元配列
 * @return array
 */
function flipHorizontal(array $matrix): array {
    return array_map('array_reverse', $matrix);
}

/**
 * 180度回転（上下反転 + 左右反転）
 * @param array $matrix 2次元配列
 * @return array
 */
function rotate180(array $matrix): array {
    return flipHorizontal(flipVertical($matrix));
}

/**
 * 90度時計回り回転
 * @param array $matrix 2次元配列
 * @return array
 */
function rotate90Clockwise(array $matrix): array {
    return flipHorizontal(transpose($matrix));
}

/**
 * 90度反時計回り回転
 * @param array $matrix 2次元配列
 * @return array
 */
function rotate90CounterClockwise(array $matrix): array {
    return flipVertical(transpose($matrix));
}

/**
 * 転置（行と列を入れ替える）
 * @param array $matrix 2次元配列
 * @return array
 */
function transpose(array $matrix): array {
    if (empty($matrix)) return [];
    return array_map(null, ...$matrix);
}

/**
 * 行列を文字列として出力（スペース区切り）
 * @param array $matrix 2次元配列
 * @param string $separator 要素間の区切り文字
 */
function printMatrix(array $matrix, string $separator = ' '): void {
    foreach ($matrix as $row) {
        echo implode($separator, $row) . "\n";
    }
}

/**
 * 標準入力から行列を読み込む
 * @param int $rows 行数
 * @param string $separator 区切り文字
 * @return array
 */
function readMatrix(int $rows, string $separator = ' '): array {
    $matrix = [];
    for ($i = 0; $i < $rows; $i++) {
        $matrix[] = explode($separator, trim(fgets(STDIN)));
    }
    return $matrix;
}
