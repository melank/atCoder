n, k, q = map(int, input().split())
point = {}
if k > q:
    for i in range(n):
        print('Yes')
    exit()

for i in range(q):
    a = int(input())
    if not a in point:
        point[a] = 1
    else:
        point[a] += 1

for i in range(1, n + 1):
    if i in point and point[i] > q - k:
        print('Yes')
    else:
        print('No')