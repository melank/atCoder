import math
n = int(input())
for x in range(1, n+1):
    if math.floor(x * 1.08) == n:
        print(x)
        exit()
print(':(')