s = input()
big = list('ABCDEFGHIJKLMNOPQRSTUVWXYZ')
small = list('abcdefghijklmnopqrstuvwxyz')

for i, c in enumerate(s):
    if i %2 == 0 and c in big:
        print('No')
        exit()
    if i %2 != 0 and c in small:
        print('No')
        exit()

print('Yes')