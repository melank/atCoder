import math
a, b, w = map(int, input().split())
weight = w * 1000
max_ = 0
min_ = 100000000

for i in range(1, 1000001):
    if a * i <= weight and weight <= b * i:
        min_ = min(min_, i)
        max_ = max(max_, i)

if max_ == 0:
    print("UNSATISFIABLE")
else:
    print(min_, max_)