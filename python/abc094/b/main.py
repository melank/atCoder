n, m, x = map(int, input().split())
gates = list(map(int, input().split()))
cost_a = 0
for i in range(x, n):
    if i in gates:
        cost_a += 1

cost_b = 0
for i in range(x, 0, -1):
    if i in gates:
        cost_b += 1

print(min(cost_a, cost_b))