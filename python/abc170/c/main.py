x, n = map(int, input().split())
excludes = list(map(int, input().split()))

if excludes == [] :
    print(x)
    exit()

if x not in excludes :
    print(x)
    exit()

values = [x]
for i in range(1, 101):
    if x - i >= 0:
        values.append(x - i)
    if x + i <= 101:
        values.append(x + i)

for e in excludes:
    values.remove(e)

if len(values) == 0:
    if x <= 50:
        print(0)
    else:
        print(101)
    exit()

print(values[0])