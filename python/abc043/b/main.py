s = input()

current = []
for c in s:
    if c == '0':
        current.append('0')
    elif c == '1':
        current.append('1')
    else:
        if len(current) > 0:
            current.pop()

print(''.join(current))