s = input()
if s[0] != 'A':
    print('WA')
    exit()
if s[2:-1].count('C') != 1:
    print('WA')
    exit()

cnt = 0
upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
for c in s:
    if c in upper:
        cnt += 1

if cnt == 2:
    print('AC')
else:
    print('WA')