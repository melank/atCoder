x = input()
if '.' not in x:
    print(x)
else:
    i = x.index('.')
    print(x[:i])