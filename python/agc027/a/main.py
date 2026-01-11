n, x = map(int, input().split())
satisfactions = sorted(list(map(int, input().split())))
cnt = 0
for s in satisfactions:
    x -= s
    if x < 0:
        break
    cnt += 1
if x > 0:
    print(cnt - 1)
else:
    print(cnt)