import math
n = int(input())
points = list(map(int, input().split()))

def square(x):
    return x * x

print(sum(map(abs, points)))
print(math.sqrt(sum(map(square, points))))
print(max((map(abs, points))))