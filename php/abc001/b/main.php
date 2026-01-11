<?php

/**
 * 気象情報は、世界中に様々な形で流れています。
 * そのひとつの地上実況気象通報式 (SYNOP) では、視程 (肉眼で物体がはっきりと確認できる最大の距離) を、
 * 次の規則に従って、VVという値 (通報式) に変換して報じます。
 *
 * 0.1km 未満： VVの値は 00 とする。
 * 0.1km 以上 5km 以下：距離 (km) を 10 倍した値とする。
 *
 * 1桁の場合は上位に 0 を付す。
 * 例えば、2,000m =2.0km ならば、VVは 20 である。 同じく、200mの場合VVは 02 である。
 *
 * 6km 以上 30km 以下：距離 (km) に 50 を足した値とする。
 * 例えば、15,000m =15km ならば、VVは 65 である。
 *
 * 35km 以上 70km 以下：距離 (km) から 30 を引いて 5 で割った後、80 を足した値とする。
 * 例えば、40,000m =40km ならば、VVは 82 である。
 *
 * 70km より大きい：VVの値は 89 とする。
 *
 * いま、あなたに視程の距離をメートルで与えるので、上記のルールに従って計算されるVVを出力するプログラムを作成してください。
 * なお、VVは必ず（上位の 0 を含めて） 2桁の整数であり、上記のルールに従って計算した時に整数にならないような入力や、
 * 上記の範囲に入らない入力 (例：5km より大きく 6km 未満) などはありません。
 */

// Input functions
function getLine(): string {
    return trim(fgets(STDIN));
}

// Output
function printResult(int|float|string $result): void {
    echo $result . "\n";
}


// Main
function solve(): void {
    // Write your solution here
    $m = (int) getLine();
    $vv = 0;

    if ($m < 100) {
        $vv = 0;
    } else if ($m <= 5000) {
        $vv = $m / 100;
    } else if ($m >= 6000 && $m <= 30000) {
        $vv = $m / 1000 + 50;
    } else if ($m >= 35000 && $m <= 70000) {
        $vv = ($m / 1000 - 30) / 5 + 80;
    } else if ($m > 70000) {
        $vv = 89;
    }

    // ゼロ埋めして2桁にする
    printResult(sprintf('%02d', (int) $vv));
}

solve();
