s = input()
p = ''
for c in s:
    if c == p:
        print('Bad')
        exit()
    p = c
print('Good')