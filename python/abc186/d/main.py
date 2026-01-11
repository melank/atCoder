from sys import stdin

n = int(input())
values = sorted(list(map(int, stdin.readline().split())))

# 累積和
s = [0,]
for i, v in enumerate(values):
    s.append(s[i] + v)
result = 0
for i in range(n):
    result += values[i] * i - s[i]

print(result)