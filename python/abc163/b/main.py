n, m = map(int, input().split())
h = list(map(int, input().split()))
sum_ = n - sum(h)

if sum_ < 0:
    print(-1)
else:
    print(sum_)