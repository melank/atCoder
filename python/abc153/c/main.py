n, k = map(int, input().split())
if n <= k:
    print(0)
    exit()

enemies = map(int, input().split())
rest = sorted(enemies)[:n-k]
print(sum(rest))