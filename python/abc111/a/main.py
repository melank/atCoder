n = input()
s = ''
for c in n:
    if c == '9':
        s += '1'
    elif c == '1':
        s += '9'
    else:
        s += c
print(s)
