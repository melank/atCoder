r, g, b, n = map(int, input().split())
cnt = 0
for i in range(3001):
    for j in range(3001):
        v = i * r + j * g
        if (v <= n and (n - v) % b == 0):
            cnt += 1
print(cnt)