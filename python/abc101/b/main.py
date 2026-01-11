def calc_digit(num):
    assert(num > 0)
    return int(log10(abs(num)) + 1)

n = input()
s = 0
for c in n:
    s += int(c)
if int(n) %s == 0:
    print('Yes')
else:
    print('No')