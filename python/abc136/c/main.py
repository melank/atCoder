n = int(input())
heights = list(map(int, input().split()))

level = 0
for h in heights:
    if h - 1 > level:
        level = h - 1
    elif level > h:
        print('No')
        exit()

print('Yes')