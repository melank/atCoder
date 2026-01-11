n = int(input())
values = list(map(int, input().split()))
m = {}
result = 0
for v in values:
    if v not in m:
        m[v] = 1
    else:
        m[v] += 1

for i in range(-200, 201):
    for j in range(i+1, 201):
        result += (i - j) ** 2 * m.get(i, 0) * m.get(j, 0)

print(result)