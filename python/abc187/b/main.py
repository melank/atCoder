n = int(input())
l = [tuple(map(int, input().split())) for i in range(n)]

a = 0
for i in range(n):
    for j in range(i):
        if abs(l[i][1] - l[j][1]) <= abs(l[i][0] - l[j][0]):
            a += 1

print(a)