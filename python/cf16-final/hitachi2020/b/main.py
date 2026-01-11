a, b, m = map(int, input().split())
fv = list(map(int, input().split()))
wv = list(map(int, input().split()))
min_ = min(fv) + min(wv)
for i in range(m):
    x, y, c = map(int, input().split())
    p = fv[x-1] + wv[y-1] - c
    if p < min_:
        min_ = p
print(min_)