a, b = input().split()
v = int(a + b) ** .5
if v.is_integer():
    print('Yes')
else:
    print('No')