n = int(input())
history = []
first = input()
history.append(first)
tail = first[-1]
for i in range(n-1):
    c = input()
    if (c in history) or (c[0] != tail):
        print('No')
        exit()
    tail = c[-1]
    history.append(c)
print('Yes')