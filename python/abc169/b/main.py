n = int(input())
values = sorted(list(map(int, input().split())))

if values[0] == 0:
    print(0)
    exit()

total = 1
for v in values:
    total *= v
    if len(str(total)) >= 19 and total != 10**18:
        print(-1)
        exit()

print(total)