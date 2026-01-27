# AtCoder Solutions

[AtCoder](https://atcoder.jp/) の解答集

## Structure

```
php/          # PHP solutions
python/       # Python solutions
```

## Setup

### oj / acc ログイン設定

AtCoder の認証方式変更により、`acc login` / `oj login` が動作しません。手動で Cookie を設定する必要があります。

1. ブラウザで [AtCoder](https://atcoder.jp/) にログイン
2. 開発者ツール（F12）→ Application → Cookies → `https://atcoder.jp`
3. `REVEL_SESSION` の Value をコピー

#### acc の設定

```bash
# session.json を開く
open ~/Library/Preferences/atcoder-cli-nodejs/session.json
```

`REVEL_SESSION=` の後ろの値を置き換え：

```json
{
  "cookies": [
    "REVEL_FLASH=",
    "REVEL_SESSION=<コピーした値>"
  ]
}
```

#### oj の設定

```bash
# cookie.jar を開く
open ~/Library/Application\ Support/online-judge-tools/cookie.jar
```

以下の形式で記述：

```
# Netscape HTTP Cookie File
atcoder.jp	FALSE	/	FALSE	0	REVEL_SESSION	<コピーした値>
```

#### 確認

```bash
acc session
oj login https://atcoder.jp --check
```

## Usage

```bash
php php/XXXX.php < input.txt
python python/XXXX.py < input.txt
```

## Claude Code スキル

Claude Code で使えるカスタムスキル（スラッシュコマンド）:

### /practice

練習問題を出題するエージェント。カテゴリと難易度を指定して問題を生成します。

```bash
/practice              # カテゴリと難易度を対話的に選択
/practice グラフ 中級   # 指定したカテゴリ・難易度で出題
/practice BFS          # アルゴリズムを指定して出題
```

**カテゴリ**: グラフ、DP、データ構造、文字列、数学、配列操作

**難易度**: 入門 / 初級 / 中級 / 上級

### /nudge

現在取り組んでいる練習問題のヒントを段階的に提供するエージェント。

```bash
/nudge  # 現在の問題に対してヒントを表示
```

ヒントは4段階（方針 → アプローチ → 実装 → コード例）で提供され、最初はレベル1から始まります。
