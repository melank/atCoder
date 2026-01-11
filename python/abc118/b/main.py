from collections import defaultdict
n, m = map(int, input().split())
d = defaultdict(int)
for i in range(n):
    foods = list(map(int, input().split()))
    for f in foods[1:]:
        d[f] += 1
total = 0
for v in d.values():
    if v == n:
        total += 1
print(total)
