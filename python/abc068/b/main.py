def num(n):
    lis = []

    for i in range(2,n+1):
        while True:
            if n%i == 0:
                lis.append(i) # 余り0なら素因数分解リストにappendする
                n = n // i # nの更新
                # print(lis)
                # print("n = {}".format(n)) # nの更新状況をみてみる
            else:
                break
    return lis

n = int(input())
count = 0
result = 1
## 素因数分解したときに、2の数が多い値を求める
for i in range(2, n + 1, 2):
    if count < num(i).count(2):
        count = num(i).count(2)
        result = i
print(result)