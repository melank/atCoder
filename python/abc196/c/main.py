from math import log10
def calc_digit(num):
    assert(num > 0)
    return int(log10(abs(num)) + 1)

n = int(input())
d = calc_digit(n)
q = 10 ** (d // 2) + 1
if d %2 == 0:
    print(n // q)
if d == 1:
    print(0)
if d == 3:
    print(9)
if d == 5:
    print(99)
if d == 7:
    print(999)
if d == 9:
    print(9999)
if d == 11:
    print(99999)