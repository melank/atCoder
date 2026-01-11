a = input()
b = input()
if a == b:
    print(('EQUAL'))
    exit()

if len(a) > len(b):
    print('GREATER')
    exit()
elif len(b) > len(a):
    print('LESS')
    exit()
else:   # len(a) == len(b):
    for i in range(len(a)):
        if int(a[i]) > int(b[i]):
            print('GREATER')
            exit()
        elif int(b[i]) > int(a[i]):
            print('LESS')
            exit()
        else:
            continue