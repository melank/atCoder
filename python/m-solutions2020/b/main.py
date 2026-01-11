import math
a, b, c = map(int, input().split())
k = int(input())
if a < b < c:
    print('Yes')
    exit()

cnt = 0
while(True):
    if b > a:
        break
    b *= 2
    cnt += 1

while(True):
    if c > b:
        break
    c *= 2
    cnt += 1

if cnt <= k:
    print('Yes')
else:
    print('No')
