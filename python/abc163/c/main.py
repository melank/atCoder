n = int(input())
staff = list(map(int, input().split()))

cnt = [0 for i in range(n)]
# print(cnt)
for s in staff:
    cnt[s - 1] += 1

for c in cnt:
    print(c)