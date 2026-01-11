n, s, d = map(int, input().split())
result = False
for i in range(n):
    x, y = map(int, input().split())
    if x < s and y > d:
        result = True
        break

if result:
    print('Yes')
else:
    print('No')