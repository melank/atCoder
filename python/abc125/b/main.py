n = int(input())
values = list(map(int, input().split()))
costs = list(map(int, input().split()))
total = 0
for i in range(n):
    if values[i] > costs[i]:
        total += values[i] - costs[i]
print(total)