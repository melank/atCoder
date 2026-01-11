n = int(input())
sq = int(n ** 0.5)
s = set()
for a in range(2, sq + 1):
    x = a ** 2  # 2乗からスタート
    while x <= n:
        s.add(x) # 値をsetに登録
        x *= a # 3乗, 4乗, 5乗と掛け合わせていく
print(n - len(s))