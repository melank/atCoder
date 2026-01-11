n = int(input())
heights = map(int, input().split())
cnt = 0
max_cnt = 0
pre_height = -1
for height in heights:
    if height <= pre_height:
        cnt += 1
    else:
        cnt = 0
    max_cnt = max(cnt, max_cnt)
    pre_height = height

print(max_cnt)
