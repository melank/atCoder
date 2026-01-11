n, m = map(int, input().split())
result = 0
if n > m // 2:
    print(m // 2)
else:
    m -= 2 * n
    result += m // 4 + n
    print(result)