towns = {1:0, 2:0, 3:0, 4:0}
for i in range(3):
    a, b = map(int, input().split())
    towns[a] += 1
    towns[b] += 1
if 1 <= towns[1] <= 2 and 1 <= towns[2] <= 2 and 1 <= towns[3] <= 2 and 1 <= towns[4] <= 2:
    print('YES')
else:
    print('NO')