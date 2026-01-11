n = int(input())
values = list(map(int, input().split()))

cnt = 0
for v in values:
    while v %2 == 0:
        v /= 2
        cnt += 1

print(cnt)