a, b, c, k = map(int, input().split())

if a == b:
    print(0)
    exit()

# 奇数回目は (b + c) - (a + c) = b - a
# 偶数回目は (a + c) - (b + c) = a - b

if k %2 == 0:
    print(a - b)
else:
    print(b - a)