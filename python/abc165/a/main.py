k = int(input())
a, b = map(int, input().split())
area = list(range(a, b + 1))

for a in area:
    if a %k == 0:
        print('OK')
        exit()

print('NG')
