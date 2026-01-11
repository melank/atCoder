s, p = map(int, input().split())
for i in range(10**6 + 1):
    if i * (s - i) == p:
        print('Yes')
        exit()
print('No')