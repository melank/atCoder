n = int(input())
d, x = map(int, input().split())
if d < 2:
    print(n + x)
    exit()
days = [0] * n
for i in range(n):
    days[i] = int(input())
total = 0
for i in range(n):
    db = days[i]
    cnt = 0
    while True:
        if cnt * db + 1 > d:
            break
        total += 1
        cnt += 1

print(total + x)