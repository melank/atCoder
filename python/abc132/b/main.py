n = int(input())
p = list(map(int, input().split()))
cnt = 0
for i in range(n - 2):
    values = [p[i], p[i+1], p[i+2]]
    target = p[i+1]
    if max(values) != target and min(values) != target:
        cnt += 1
print(cnt)