r, d, x = map(int, input().split())
result = [0 for i in range(10)]
pre = x
for i in range(10):
    result[i] = pre*r-d
    print(result[i])
    pre = result[i]