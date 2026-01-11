n = int(input())
a = list(map(int, input().split()))
cs = [0] * (n + 1)
for i, v in enumerate(a):
    cs[i+1] = v + cs[i]

length = cs[-1]
if length // 2 in cs:
    print(0)
    exit()

print(cs)