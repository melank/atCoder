s = input()
t = input()

if s == t:
    print(0)
    exit()

cnt = 0
for i in range(len(s)):
    if s[i] != t[i]:
        cnt += 1

print(cnt)