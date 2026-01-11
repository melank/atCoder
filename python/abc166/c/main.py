n, m = map(int, input().split())
heights = list(map(int, input().split()))
connection = [True for i in range(n)]
# print(connection)
for i in range(m):
    pa, pb = map(int, input().split())
    if heights[pa-1] < heights[pb-1]:
        connection[pa-1] = False
    elif heights[pb-1] < heights[pa-1]:
        connection[pb-1] = False
    else:
        connection[pa-1] = False
        connection[pb-1] = False
    # print(connection)

print(connection.count(True))