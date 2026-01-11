import math
n, k = map(int, input().split())
p = list(map(int, input().split()))
index = p.index(1)

result = 0
result += math.ceil((n - (index + 1)) / (k - 1))
# print(result)
result += index // (k - 1)
print(result)