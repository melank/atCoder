n, m = map(int, input().split())
s = []
c = []
for i in range(m):
    s_, c_ = map(int, input().split())
    s.append(s_)
    c.append(c_)

for i in range(10 ** (n + 1)):
    str_ = str(i)
    if len(str_) == n and all([str_[s[j] - 1] == str(c[j]) for j in range(m)]):
        print(str_)
        exit()
print(-1)