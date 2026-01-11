a, b, c = map(int, input().split())
cnt = 1
s = []
while True:
    m = a * cnt % b
    if m == c:
        print('YES')
        exit()
    if m in s:
        print('NO')
        exit()
    else:
        s.append(m)
    cnt += 1