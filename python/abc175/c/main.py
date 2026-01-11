x, k, d = map(int, input().split())

cnt = k
x = abs(x)

cnt = x // d
if cnt > k:
    print(x - d * k)
    exit()

x -= cnt * d
k -= cnt

# print(x, k, d)

if k %2 == 0:
    print(x)
else:
    print(abs(x-d))