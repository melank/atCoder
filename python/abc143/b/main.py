import itertools

n = int(input())
d = list(map(int, input().split()))

total = 0
for c in list(itertools.combinations(d, 2)):
    total += c[0] * c[1]
print(total)