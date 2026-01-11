wcnt = 0
bcnt = 0
for i, c in enumerate(input()):
    if c == 'W':
        wcnt += 1
        bcnt += i + 1 - wcnt
print(bcnt)