a, b, k = map(int, input().split())
small = list(range(a, min(b, a + k)))
large = list(range(max(a, b - k + 1), b + 1))
range_ = set(small + large)
for v in sorted(range_):
    print(v)