n = int(input())
permutation = list(map(int, input().split()))
cnt = 0
for i in range(1, n + 1):
    if i != permutation[i - 1]:
        cnt += 1

if cnt <= 2:
    print('YES')
else:
    print('NO')