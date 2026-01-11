# ユークリッド互除法
def gcd(a, b):
    if b == 0:
        return a
    else:
        return gcd(b, a % b)

def num(n, c, d):
    g = gcd(c, d)
    l = c // g * d
    return n - n // c - n // d + n // l

a, b, c, d = map(int, input().split())
print(int(num(b, c, d) - num(a - 1, c, d)))
