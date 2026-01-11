n = int(input())
a = list(input().split())

if n == 1:
    print(a[0])
    exit()

b = [0] * 500000
left, right = 212345, 212346
for i in range(n):
    if i %2 == (n - 1) %2:
        b[left] = a[i]
        left -= 1
    else:
        b[right] = a[i]
        right += 1

for i in range(left + 1, right):
    if i < right-1:
        print(b[i], end=' ')
    else:
        print(b[i])