n = int(input())
coords = list(map(int, input().split()))
p = round(sum(coords) / len(coords))

total = 0
for c in coords:
    total += (c - p) ** 2

print(total)