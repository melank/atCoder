a, b, x, y = map(int, input().split())

if a == b:
    print(x)
elif a > b:
    if 2 * x < y:
        print(x + (a - b - 1) * (2 * x))
    else:
        print(x + (a - b - 1) * y)
else:
    if 2 * x < y:
        print(x + (b - a) * (2 * x))
    else:
        print(x + (b - a) * y)