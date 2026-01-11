n = int(input())
values = list(map(int, input().split()))
result = 0
for a in values:
    result += a - 1
print(result)