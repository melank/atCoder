q, h, s, d = map(int, input().split())
n = int(input())
if n == 1:
    print(min(q*4, h*2, s))
# n >= 2
else:
    liter = min(q*4, h*2, s)
    two_liter = min(d, liter*2)
    if n %2 == 0:
        print(two_liter * n // 2)
    else:
        print((two_liter * (n // 2)) + liter)
