a, b = map(int, input().split())
n = ['1','2','3','4','5','6','7','8','9','0']
s = input()

def f():
    for i in range(a):
        if s[i] not in n:
            return False
    for i in range(a+1, len(s)):
        if s[i] not in n:
            return False
    return True

if s[a] == '-' and len(s) == a + b + 1 and f():
    print('Yes')
else:
    print('No')