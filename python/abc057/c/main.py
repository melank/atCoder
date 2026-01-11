from math import sqrt, log10

def calc_digit(num):
    assert(num > 0)
    return int(log10(abs(num)) + 1)

n = int(input())
result = 1 << 29
for i in range(1, int(sqrt(n)) + 1):
    v = 0
    if n %i == 0:
        v = n // i
        # print(v)
        f = max(calc_digit(i), calc_digit(v))
        result = min(result, f)
print(result)