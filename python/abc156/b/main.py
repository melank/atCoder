from math import log10

def calc_digit(num):
    assert(num > 0)
    return int(log10(abs(num)) + 1)

def base_10_to_n(X, n):
    if int(X / n):
        return base_10_to_n(int(X / n), n) + str(X % n)
    return str(X % n)

n, k = map(int, input().split())
x = base_10_to_n(n, k)
print(calc_digit(int(x)))