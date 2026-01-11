x = int(input())
current = 0
cnt = 0
while(True):
    cnt += 1
    current += x
    if current %360 == 0:
        print(cnt)
        exit()