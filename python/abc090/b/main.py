a, b = map(int, input().split())
cnt = 0
for n in range(a, b + 1):
    if str(n) == str(n)[::-1]:
        cnt += 1
print(cnt)