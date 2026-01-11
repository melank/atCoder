n = int(input())
k = int(input())
values = map(int, input().split())
result = 0
for v in values:
    result += min(k - v, v) * 2
print(result)