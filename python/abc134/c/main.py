n = int(input())
values = [0] * n
first = 0
second = 0
only = False
values = [0] * n
for i in range(n):
    v = int(input())
    values[i] = v
    if v > first:
        only = True
        second = first
        first = v
        continue
    elif second <= v < first:
        second = v

    if v == first:
        only = False

for i in range(n):
    if values[i] == first:
        if only:
            print(second)
        else:
            print(first)
    else:
        print(first)