a, b, c = map(int, input().split())
MAX = max(a, b, c)
MIN = min(a, b, c)
print(MAX * 10 + a + b + c - MAX)