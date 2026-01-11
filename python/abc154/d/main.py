n, k = map(int, input().split())
dices = list(map(int, input().split()))

if k == 1:
    print("{:.12f}".format((1 + max(dices)) / 2))
    exit()

p = [0] * n
for i in range(n):
    p[i] = (dices[i] + 1)

v = sum(p[:k])
result = v

for j in range(n - k):
    v = v - p[j] + p[j + k]
    result = max(v, result)

print("{:.12f}".format(result / 2))