n = int(input())
enemies = list(map(int, input().split()))
powers = list(map(int, input().split()))

total = 0
for i in range(len(powers)):
    power = powers[i]
    first = min(enemies[i], power)
    if first >= enemies[i]:
        rest = power - first
        enemies[i] = 0
        total += min(enemies[i + 1], rest)
        enemies[i + 1] = max(0, enemies[i + 1] - rest)
    else:
        enemies[i] -= first
    total += first
    # print(enemies)

print(total)