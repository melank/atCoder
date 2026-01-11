from math import ceil, floor, sqrt
from decimal import Decimal

x, y, r = map(Decimal, input().split())

cnt = 0

start, end = ceil(x - r), floor(x + r)

for i in range(start, end + 1):
    p = ((r ** 2) - ((x - i) ** 2)).sqrt()
    bottom, top = ceil(y - p), floor(y + p)
    cnt += top + 1 - bottom

print(cnt)