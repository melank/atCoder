s = input()
cnt = [0, 0]
for i in range(len(s)):
    n = int(s[i])
    if (i %2 == 1 and n == 0) or (i %2 == 0 and n == 1):
        cnt[0] += 1
for i in range(len(s)):
    n = int(s[i])
    if (i %2 == 1 and n == 1) or (i %2 == 0 and n == 0):
        cnt[1] += 1
print(min(cnt))