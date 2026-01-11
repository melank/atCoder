import math
n, d = map(int, input().split())
lines = []
for i in range(n):
    lines.append(list(map(int, input().split())))

cnt = 0
for i in range(n - 1):
    line1 = lines[i]
    for j in range(i+1, n):
        line2 = lines[j]

        distance = 0
        for k in range(d):
            distance += abs(line2[k] - line1[k]) ** 2
        distance = math.sqrt(distance)
        # print(distance)
        if distance.is_integer():
            cnt += 1
print(cnt)