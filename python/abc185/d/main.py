import math

n, m = map(int, input().split())
masu = sorted(map(int, input().split()))
diffs = []
cursor = 0

if m == 0:
    print(1)
    exit()

for m in masu:
    diff = m - cursor - 1
    cursor = m
    if diff <= 0:
        continue
    diffs.append(diff)

if masu[-1] != n:
    diffs.append(n - masu[-1])

if len(diffs) == 0:
    print(0)
    exit()

length = min(diffs)
total = 0
# print(diffs)
for d in diffs:
    total += math.ceil(d / length)

print(total)