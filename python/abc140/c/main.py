s = input()
values = list(map(int, input().split()))
total = 0
for i in range(len(values)):
    if i == 0:
        total += values[0]
    if i == len(values) - 1:
        total += values[-1]
    else:
        total += min(values[i], values[i+1])

print(total)