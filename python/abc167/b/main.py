a, b, c, k = map(int, input().split())

result = 0

## 全部 1が書かれたカード
if a >= k:
    print(k)
    exit()

result += a
k -= a
# print(result, k)

if b >= k:
    print(result)
    exit()

k -= b
# print(result, k)

result -= min(c, k)

print(result)