n, m = map(int, input().split())
stores = [[0, 0] for i in range(n)]
for i in range(n):
    stores[i][0], stores[i][1] = map(int, input().split())
result = 0
stores = sorted(stores)
for s in stores:
    if s[1] <= m:
        k = s[1]
    else:
        k = m
    result += s[0] * k
    m -= k
    # print(k, result, m)
    if m == 0:
        break
print(result)