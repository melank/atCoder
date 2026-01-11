s = input()
c = int(s[0])
l = len(s) - 1
if s[1:] == '9' * l:
    print(c + 9 * l)
else:
    print((c - 1) + (9 * l))
