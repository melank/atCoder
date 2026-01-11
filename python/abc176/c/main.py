n = int(input())
heights = map(int, input().split())
current = 0
result = 0
for h in heights:
    if h < current:
        result += current - h
    else:
        h >= current
        current = h
print(result)