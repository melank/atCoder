k = int(input())
cnt = [0] * (k + 1)
result = 0
for x in range(1, k + 1):
    for y in range(1, k + 1):
        if x * y > k:
            break
        cnt[x * y] += 1
for i in range(1, k + 1):
    for j in range(1, k + 1):
        if i * j > k:
            break
        result += cnt[j]
print(result)