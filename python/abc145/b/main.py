n = int(input())
s = input()
if n %2 != 0:
    print('No')
    exit()
# print(s[:n//2])
# print(s[n//2:])
if s[:n//2] == s[n//2:]:
    print('Yes')
else:
    print('No')