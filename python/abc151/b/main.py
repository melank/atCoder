n, k, m = map(int, input().split())
total = sum(list(map(int, input().split())))
if m*n- total > k:
    print(-1)
    exit()
print(max(m*n - total, 0))