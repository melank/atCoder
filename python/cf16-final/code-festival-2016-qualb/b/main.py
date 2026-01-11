n, a, b = map(int, input().split())
s = input()
cnt = 1
limit = a + b
passed = 0
for index, c in enumerate(s, 1):
    if c == 'c':
        print('No')
    elif c == 'a':
        if passed < limit:
            print('Yes')
            passed += 1
        else:
            print('No')
    elif c == 'b':
        if passed < limit and cnt <= b:
            print('Yes')
            passed += 1
        else:
            print('No')
        cnt += 1
