n, k = map(int, input().split())
heights = list(filter(lambda x: x >= k, list(map(int, input().split()))))
print(len(heights))