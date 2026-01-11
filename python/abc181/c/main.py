n = int(input())
points = [tuple(map(int, input().split())) for i in range(n)]

for i in range(n):
    for j in range(i):
        for k in range(j):
            x1, y1 = points[i]
            x2, y2 = points[j]
            x3, y3 = points[k]
            x1 -= x3
            x2 -= x3
            y1 -= y3
            y2 -= y3
            if x1 * y2 == x2 * y1:
                print("Yes")
                exit()
print('No')