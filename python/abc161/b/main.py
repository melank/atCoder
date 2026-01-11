n, m = map(int, input().split())
goods = list(map(int, input().split()))
votes = sum(goods)
cnt = 0
for g in goods:
    if g * (m * 4) >= votes:
        cnt += 1

if cnt >= m:
    print('Yes')
else:
    print('No')