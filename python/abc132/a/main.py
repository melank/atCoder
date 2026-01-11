s = input()
if len(set(s)) != 2:
    print('No')
    exit()

line = list(s)
if line.count(s[0]) != 2:
    print('No')
    exit()

print('Yes')