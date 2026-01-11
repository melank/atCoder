n, m, c = map(int, input().split())
b = list(map(int, input().split()))
cnt = 0
for i in range(n):
    a = list(map(int, input().split()))
    total = 0
    for j in range(m):
        total += a[j] * b[j]
    if total > -c:
        cnt += 1
print(cnt)