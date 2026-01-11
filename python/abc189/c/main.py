n = int(input())
values = list(map(int, input().split()))

result = 0
for l in range(n):
    x = values[l]
    for r in range(l, n):
        x = min(x, values[r])
        result = max(result, x * (r - l + 1))

print(result)