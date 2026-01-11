n, t = map(int, input().split())
c = 1001
for i in range(n):
    cost, time = map(int, input().split())
    if time <= t and cost < c:
        c = cost
if c == 1001:
    print('TLE')
else:
    print(c)