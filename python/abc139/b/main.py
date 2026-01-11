a, b = map(int, input().split())

if b == 1:
    print(0)
    exit()

cnt = 1
power = 1
while(True):
    power += a - 1
    if power >= b:
        break
    cnt += 1

print(cnt)