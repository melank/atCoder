n, m = map(int, input().split())
available = set()
l = 0
r = 10**5 + 1
for i in range(m):
    start, end = map(int, input().split())
    if start > l:
        l = start
    if end < r:
        r = end

    if r < l:
        print(0)
        exit()

print(r - l + 1)