n = int(input())
b = [0] * (n + 1)
for i in range(1, n+1):
    b[i] = int(input())
cnt = 1
cursor = 1
while True:
    if b[cursor] == 2:
        print(cnt)
        exit()
    cursor = b[cursor]
    cnt += 1
    if cnt > len(b):
        break
print(-1)