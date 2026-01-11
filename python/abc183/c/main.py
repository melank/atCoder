import itertools

n, k = map(int, input().split())
t = [list(map(int, input().split())) for _ in range(n)]

nums = list(range(1, n))
result = 0
for index in itertools.permutations(nums):
    index = [0] + list(index)
    time = 0
    for i in range(n):
        time += t[index[i]][index[(i + 1) % n]]
    if time == k:
        result += 1
print(result)