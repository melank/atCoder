grid = [list(map(int, input().split())), list(map(int, input().split())), list(map(int, input().split()))]
pre = []
for i in range(3):
    diff = []
    diff.append(grid[i][1] - grid[i][0])
    diff.append(grid[i][2] - grid[i][1])

    if pre != [] and pre != diff:
        # print(pre, diff)
        print('No')
        exit()
    pre = diff

pre = []
for i in range(3):
    diff = []
    diff.append(grid[1][i] - grid[0][i])
    diff.append(grid[2][i] - grid[1][i])

    if pre != [] and pre != diff:
        # print(pre, diff)
        print('No')
        exit()
    pre = diff

print('Yes')