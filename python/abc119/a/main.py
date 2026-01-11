y, m, d = map(int, input().split('/'))

if y < 2019 or m < 4 or (m == 4 and d <= 30):
    print('Heisei')
else:
    print('TBD')