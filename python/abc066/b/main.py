s = list(input())
while(len(s) > 0):
    s.pop()
    s.pop()
    if s[:len(s) // 2] == s[len(s) // 2:] :
        break

print(len(s))