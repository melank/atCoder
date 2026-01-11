k, a, b = map(int, input().split())
if b - a <= 2:
    print(k + 1)
    exit()

bisket = 1
bisket += a - 1
k -= a - 1

bisket += k // 2 * (b - a)
k = k % 2

bisket += k

print(bisket)