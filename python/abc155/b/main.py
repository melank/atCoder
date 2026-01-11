n = int(input())
values = list(map(int, input().split()))
for v in values:
    if v %2 != 0:
        continue
    if v %3 != 0 and v %5 != 0:
        print('DENIED')
        exit()
print('APPROVED')