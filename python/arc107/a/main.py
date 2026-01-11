a, b, c = map(int, input().split())
d = (a * (a + 1)) // 2 * (b * (b + 1)) // 2 * (c * (c + 1)) // 2
v = 998244353
print(d % v)