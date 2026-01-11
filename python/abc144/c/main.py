import math
n = int(input())

result = 0
result = n - 1
for i in range(1, math.floor(math.sqrt(n)) + 1):
    if n % i == 0:
        result = min(result, i + n // i - 2)

print(result)