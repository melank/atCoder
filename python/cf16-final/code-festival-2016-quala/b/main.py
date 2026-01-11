n = int(input())
pairs = list(map(int, input().split()))
cnt = 0
passed = []
for index in range(n):
    target_index = pairs[index] - 1
    if index == pairs[target_index] - 1:
        cnt += 1
        passed.append(target_index)
print(cnt // 2)