x, a, b = map(int, input().split())
passed = b - a
if passed <= 0:
    print('delicious')
elif passed <= x:
    print('safe')
else:
    print('dangerous')