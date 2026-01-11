n = int(input())
s = input()
t = input()

if s == t:
    print(n)
    exit()

min_ = 100
for i in range(n):
    line = s[:n-i] + t
    if line[:n] == s and line[n-i:] == t:
        min_ = len(line)
print(min_)