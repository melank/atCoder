n = int(input())
heights = list(map(int, input().split()))
cnt = 1
max_height = heights[0]
for i in range(1, n):
    h = heights[i]
    if max_height <= h:
        cnt += 1
    max_height = max(h, max_height)
print(cnt)