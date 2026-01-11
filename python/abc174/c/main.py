k = int(input())
if k %2 == 0:
    print(-1)
    exit()
if k == 7:
    print(1)
    exit()

a = [7%k]
for i in range(1, k + 1):
    a.append((a[i -1] * 10 + 7) % k)

for i in range(1, k):
    if a[i] == 0:
        print(i + 1)
        exit()

print(-1)