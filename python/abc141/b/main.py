s = input()

for i, c in enumerate(s):
    if i %2 == 0:
        if c == 'L':
            print('No')
            exit()
    else:
        if c == 'R':
            print('No')
            exit()
print('Yes')
