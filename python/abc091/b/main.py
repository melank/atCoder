import collections
n = int(input())
s = [0] * n
for i in range(n):
    s[i] = input()
m = int(input())
t = [0] * m
for i in range(m):
    t[i] = input()
counter_s = collections.Counter(s)
counter_t = collections.Counter(t)
e = 0
for c in counter_s:
    if c not in counter_t:
        value = counter_s[c]
    else:
        value = counter_s[c] - counter_t[c]
    if value > e:
        e = value

print(e)