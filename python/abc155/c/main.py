n = int(input())
values = {}
for i in range(n):
    s = input()
    if s in values:
        values[s] += 1
    else:
        values[s] = 1

max_value = max(values.values())
candidates = []
for k, v in sorted(values.items()):
    if v == max_value:
        candidates.append(k)

for c in candidates:
    print(c)