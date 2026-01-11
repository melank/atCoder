import math

def distance(x, y):
    return math.sqrt(x*x + y*y)

n, d = map(int, input().split())
cnt = 0
for i in range(n):
    x, y = map(int, input().split())
    if distance(x, y) <= d:
        cnt += 1
print(cnt)