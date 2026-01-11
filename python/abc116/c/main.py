n = int(input())
heights = list(map(int, input().split()))
result = heights[0]
for i in range(n - 1):
    if heights[i + 1] - heights[i] > 0:
        result += heights[i + 1] - heights[i]

# 上昇している範囲
print(result)