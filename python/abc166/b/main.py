n, k = map(int, input().split())
p = set()
for i in range(k):
    d = int(input())
    p = p | set(map(int, input().split()))

print(n - len(p))