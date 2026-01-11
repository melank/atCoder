import itertools
n = int(input())

a = list(range(1, 38))
b = list(range(1, 26))

for p in itertools.product(a, b):
    if 3 ** p[0] + 5 ** p[1] == n:
        print(p[0], p[1])
        exit()
print(-1)