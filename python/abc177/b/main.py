s = input()
t = input()

if t in s :
    print(0)
    exit()

max_cnt = 0
for i in range(len(s) - len(t) + 1):
    cnt = 0
    for j in range(len(t)):
        if t[j] == s[i+j]:
            cnt += 1
        if cnt > max_cnt:
            max_cnt = cnt

print(len(t) - max_cnt)