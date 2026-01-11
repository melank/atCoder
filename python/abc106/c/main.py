s = input()
k = int(input())
## 1が含まれない場合には必ずオーバフローするので、最初の数値が答え
if '1' not in s:
    print(s[0])
    exit()
else:
    ## 1しか含まれない
    if k <= len(s) and s[:k] == '1' * k:
        print(1)
        exit()

## 1以外の数値がはじめに登場するインデックスがk以下の場合
for i, c in enumerate(s):
    if c != '1':
        if i + 1 <= k:
            print(c)
        else:
            print(1)
        exit()
