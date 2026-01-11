s = input()
t = input()

for i in range(1, len(s) + 1):
    if s[len(s) - i:] + s[:len(s) - i] == t:
        print('Yes')
        exit()

print('No')