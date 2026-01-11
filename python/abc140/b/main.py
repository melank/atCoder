n = int(input())
a = list(map(int, input().split()))
b = list(map(int, input().split()))
c = list(map(int, input().split()))
manzokudo = 0
pre = -1
for i in a:
    manzokudo += b[i - 1]
    if i == pre + 1:
        manzokudo += c[pre - 1]
    pre = i
print(manzokudo)