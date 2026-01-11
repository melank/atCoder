n = int(input())
order = list(map(int, input().split()))
cnt = 1
min_ = order[0]
for i in range(1, n):
    v = order[i]
    if v <= min_:
        cnt += 1
    min_ = min(min_, v)

print(cnt)