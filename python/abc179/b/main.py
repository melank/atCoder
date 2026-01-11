n = int(input())
cnt = 0
for i in range(n):
    d1, d2 = map(int, input().split())
    if d1 != d2:
        cnt = 0
    else:
        cnt += 1
        if cnt == 3:
            print('Yes')
            exit()

print('No')