a, b = map(int, input().split())
h = [0] * 1001
for i in range(1, 1001):
    h[i] = i + h[i - 1]
print(h)
d = b - a