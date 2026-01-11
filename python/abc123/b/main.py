import math
min_ = 10
def f(v):
    global min_
    if v % 10 != 0 and v % 10 < min_:
        min_ = v % 10
a = int(input())
f(a)
b = int(input())
f(b)
c = int(input())
f(c)
d = int(input())
f(d)
e = int(input())
f(e)
print(sum(list(map(lambda x:math.ceil(x / 10)*10, [a, b, c, d, e]))) - 10 + min_)