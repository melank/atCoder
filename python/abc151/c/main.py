n, m = map(int, input().split())
ac = set()
wa = {}

if m == 0:
    print(0, 0)
    exit()

for i in range(m):
    p, s = input().split()
    p = int(p)
    if p in ac:
        continue

    if s == 'AC':
        ac.add(p)
    else:
        if not p in wa:
            wa[p] = 1
        else:
            wa[p] += 1

total = 0
for key, value in wa.items():
    if key in ac:
        total += value

print(len(ac), total)