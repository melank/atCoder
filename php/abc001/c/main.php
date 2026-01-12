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

    /**
     * 　方位　	　角度　	　方位　	　角度　
     * 　N (北)　	　他のいずれにも当てはまらない　	　
     * 　NNE (北北東)　	　11.25 度以上 33.75 度未満
     * 　NE (北東) 33.75 度以上 56.25 度未満　
     * ENE (東北東) 56.25 度以上 78.75 度未満
     * 　E (東)　 78.75 度以上 101.25 度未満　
     * 　ESE (東南東)　	101.25 度以上 123.75 度未満　
     * 　SE (南東) 123.75 度以上 146.25 度未満　
     * 　SSE (南南東)　	　146.25 度以上 168.75 度未満　
     * S (南)　	　168.75 度以上 191.25 度未満　
     * SSW (南南西)　 191.25 度以上 213.75 度未満　
     * SW (南西)　 213.75 度以上 236.25 度未満　
     * 　WSW (西南西)　	236.25 度以上 258.75 度未満　
     * W (西)　	　258.75 度以上 281.25 度未満　
     * WNW (西北西)　 281.25 度以上 303.75 度未満
     * NW (北西)　303.75 度以上 326.25 度未満　
     * NNW (北北西)　326.25 度以上 348.75 度未満　
     */

    /**
     * 風力　　	風速　　	風力　　	風速　　	風力　　	風速　　
     * 風力 0 0.0m/s 以上 0.2m/s 以下　　
     * 風力 1　　0.3m/s 以上 1.5m/s 以下
     * 風力 2　　1.6m/s 以上 3.3m/s 以下　　
     * 風力 3 3.4m/s 以上 5.4m/s 以下　
     * 風力 4　　5.5m/s 以上 7.9m/s 以下
     * 風力 5 8.0m/s 以上 10.7m/s 以下
     * 風力 6　　10.8m/s 以上 13.8m/s 以下　
     * 風力 7　　13.9m/s 以上 17.1m/s 以下
     * 風力 8 17.2m/s 以上 20.7m/s 以下　　	　
     * 風力 9　　20.8m/s 以上 24.4m/s 以下　　	　
     * 風力 10 24.5m/s 以上 28.4m/s 以下　　
     * 風力 11　28.5m/s 以上 32.6m/s 以下　　
     * 風力 12　　32.7m/s 以上　　
     */

    // Write your solution here
    [$deg, $dis] = getIntArray();
    $deg /= 10.0;  // 角度（度）
    // 風速は 60 で割り、小数第1位で四捨五入する
    $w = round($dis / 60.0, 1);  // 風速（m/s）

    // 方位の判定: 22.5度刻みで16方位
    // (角度 + 11.25) を 22.5 で割ったインデックスで方位を取得
    $directions = ['N', 'NNE', 'NE', 'ENE', 'E', 'ESE', 'SE', 'SSE',
                   'S', 'SSW', 'SW', 'WSW', 'W', 'WNW', 'NW', 'NNW'];
    $dirIndex = (int)(($deg + 11.25) / 22.5) % 16;
    $direction = $directions[$dirIndex];

    // 風力の判定: 閾値の配列を用意してループで探索
    // 各風力の上限値（風速 m/s）
    $windThresholds = [0.2, 1.5, 3.3, 5.4, 7.9, 10.7, 13.8, 17.1, 20.7, 24.4, 28.4, 32.6];
    $windForce = 12;  // デフォルト（32.7m/s以上）
    foreach ($windThresholds as $force => $threshold) {
        if ($w <= $threshold) {
            $windForce = $force;
            break;
        }
    }

    // 風力0の場合は「C 0」と出力（静穏）
    if ($windForce === 0) {
        printResult("C 0");
    } else {
        printResult($direction . " " . $windForce);
    }
}

solve();
