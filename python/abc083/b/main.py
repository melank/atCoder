n, a, b = map(int, input().split())
result = 0
for n in range(1, n+1):
    s = str(n)
    cnt = 0
    for c in s:
        cnt += int(c)
    if a <= cnt <= b:
        result += n
print(result)