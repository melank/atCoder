from math import sqrt

a, b, c = map(int, input().split())
# a + b + 2*(a * b).sqrt() < c
# c - a - b > 2 * (a * b))

if c - a - b < 0:
    print(('No'))
    exit()

if (c - a - b) ** 2 > 4 * (a * b):
    print('Yes')
else:
    print('No')