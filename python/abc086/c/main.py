n = int(input())
current = [0, 0]
pt = 0
for i in range(n):
    t, x, y = map(int, input().split())
    d = abs(current[0] - x) + abs(current[1] - y)
    p = t - pt
    if d > p:
        print('No')
        exit()
    if d %2 == 0 and p %2 != 0:
        print('No')
        exit()
    if d %2 != 0 and p %2 == 0:
        print('No')
        exit()
    pt = t
    current = [x, y]
print('Yes')