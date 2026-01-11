n, x = map(int, input().split())
total = 0
min_ = 1001
for i in range(n):
    m = int(input())
    total += m
    if min_ > m:
        min_ = m
print(n + (x - total) // min_)
