n = int(input())
s = input()
length = len(s)
if length <= n:
    print(s)
    exit()
print(s[:n] + '...')