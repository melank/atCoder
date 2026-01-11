a, b, c = map(int, input().split())

def func(a, b, c):
    if a %2 != 0 or b %2 != 0 or c %2 != 0:
        return 0
    if a == b == c:
        return -1

    return func((b + c) // 2, (c + a) // 2, (a + b) // 2) + 1

print(func(a, b, c))