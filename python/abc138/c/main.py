N = int(input())
v = list(map(int, input().split()))
v.sort()
tmp = (v[0] + v[1]) / 2
for i in range(2,N):
    tmp = (tmp + v[i]) / 2
print(tmp)