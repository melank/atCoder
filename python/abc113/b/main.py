n = int(input())
t, a = map(int, input().split())
heights = list(map(int, input().split()))

best = 100000
index = 0
for i, h in enumerate(heights):
    average = (t - h * 0.006)
    diff = abs(a - average)
    if diff < best:
        best = diff
        index = i + 1
print(index)