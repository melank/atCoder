from math import floor

a, b = input().split()
a, b = int(a), round(100 * float(b))

ans = a * b // 100
print(ans)