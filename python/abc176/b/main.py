n = input()
test = []
for c in n:
    test.append(int(c))

if sum(test) %9 == 0:
    print('Yes')
else:
    print('No')