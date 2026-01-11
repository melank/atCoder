a, b, k = map(int, input().split())

if a >= k:
    print(a - k, b)
    exit()

if k >= a + b:
    print(0, 0)
    exit()

print(0, b - (k - a))