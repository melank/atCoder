n, k = map(int, input().split())
a = list(map(int, input().split()))
hist = [0] * n
for i in a:
    hist[i] += 1
ans = 0
val = [0] * n
val[0] = min(k, hist[0])
ans += val[0]
for i in range(1, n):
    val[i] = min(k, val[i - 1], hist[i])
    ans += val[i]
print(ans)