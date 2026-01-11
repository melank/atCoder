n = int(input())
min_ = 10**9 + 1
ok = False
for i in range(n):
    a, p, x = map(int, input().split())
    if x > a and p < min_:
        min_ = p
        ok = True

if not ok :
    print(-1)
else:
    print(min_)