import math
n = int(input())
x = math.ceil(n / 9)
y = n % 9
if y == 0:
    y = 9
result = str(y) * x
print(result)