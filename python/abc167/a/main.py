s = input()
t = input()

length = len(s)
if s == t[:length]:
    print('Yes')
else:
    print('No')