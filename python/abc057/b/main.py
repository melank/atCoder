n, m = map(int, input().split())
coordinates = [[0, 0] for i in range(n)]
points = [[0, 0] for i in range(m)]
for i in range(n):
    coordinates[i][0], coordinates[i][1] = map(int, input().split())
for i in range(m):
    points[i][0], points[i][1] = map(int, input().split())

for i in range(n):
    min_distance = 10**9
    result = 0
    for j in range(m):
        distance = abs(points[j][0] - coordinates[i][0]) + abs(points[j][1] - coordinates[i][1])
        if distance < min_distance:
            result = j + 1
            min_distance = distance
    print(result)