n, m = map(int, input().split())
connections = {}
for i in range(m):
    a, b = map(int, input().split())
    if a in connections:
        connections[a] += 1
    else:
        connections[a] = 1
    if b in connections:
        connections[b] += 1
    else:
        connections[b] = 1

for i in range(1, n+1):
    if i not in connections:
        print(0)
        continue
    print(connections[i])