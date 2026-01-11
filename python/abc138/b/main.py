n = int(input())
values = list(map(int, input().split()))

denom = 0
for v in values:
    denom += 1 / v
print(1 / denom)