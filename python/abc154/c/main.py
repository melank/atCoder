n = int(input())
values = list(map(int, input().split()))
table = {}
for v in values:
    if v in table:
        print('NO')
        exit()
    else:
        table[v] = 0
print('YES')