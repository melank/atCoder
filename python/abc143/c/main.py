n = int(input())
s = input()

cnt = 0
pre = ''
for c in s:
    if c != pre:
        cnt += 1
    pre = c
print(cnt)