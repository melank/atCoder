n, m, t = map(int, input().split())
max_n = n
pre_b = 0
for i in range(m):
    a, b = map(int, input().split())
    shouhi = a - pre_b
    n -= shouhi
    if n <= 0:
        print("No")
        exit()
    # 最大容量まで充電
    n = min(max_n, n + (b - a))
    pre_b = b

if n - (t - pre_b) > 0:
    print("Yes")
else:
    print("No")