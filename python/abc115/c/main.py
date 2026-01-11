import itertools
n, k = map(int, input().split())
heights = [0] * n
for i in range(n):
    heights[i] = int(input())

heights = sorted(heights)

result = 10 ** 10   # 上限値
for i in range(len(heights) - k + 1):
    result = min(result, heights[i + k - 1] - heights[i])
print(result)