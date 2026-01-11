x, y = map(int, input().split())
result = 0
while x <= y:
    x *= 2
    result += 1
print(result)