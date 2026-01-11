import math

k = int(input())
total = 0
for a in range(1, k + 1):
    for b in range(1, k + 1):
        num = math.gcd(a, b)
        for c in range(1, k + 1):
            total += math.gcd(num, c)
print(total)