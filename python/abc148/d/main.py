n = int(input())
bricks = list(map(int, input().split()))
cnt = 0
cursor = 0
for b in bricks:
    if b == cursor + 1:
        cursor = b
    else:
        cnt += 1
if cursor == 0:
    print(-1)
else:
    print(cnt)