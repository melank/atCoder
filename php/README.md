## 設定内容

| ツール                  | バージョン |
|-------------------------|------------|
| oj (online-judge-tools) | 11.5.1     |
| acc (atcoder-cli)       | 2.2.0      |
| PHP (このフォルダ用)    | 8.4.16     |

## 使い方

### AtCoder にログイン

```
acc login
oj login https://atcoder.jp
```

### コンテスト問題をダウンロード

```
acc new abc001
```

### テスト実行

```
oj test -c "php main.php"
```

### 提出

```
acc submit
```