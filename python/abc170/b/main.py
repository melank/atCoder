import math
x, y = map(int, input().split())

if y < x * 2:
    print('No')
    exit()

if y %2 != 0:
    print('No')
    exit()

if y > 4 * x:
    print('No')
    exit()

min_ = 0
if y %4 == 0:
    if x >= y // 4:
        print('Yes')
        exit()


print('Yes')