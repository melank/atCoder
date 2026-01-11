n = int(input())
a = max(list(map(int, input().split())))
b = min(list(map(int, input().split())))
print(max(0, b - a + 1))