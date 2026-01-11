a, b = input().rstrip().split()
a = list(map(int, a))
b = list(map(int, b))
print(max(sum(a), sum(b)))