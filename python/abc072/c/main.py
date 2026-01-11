n = int(input())
a = map(int, input().split())
m = [0] * (10**5 + 1)
for n in a:
    if n != 0:
        m[n - 1] += 1
    m[n] += 1
    if n != 10**5 - 1:
        m[n + 1] += 1

print(max(m))