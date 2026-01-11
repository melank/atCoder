n, x = map(int, input().split())
sum_ = 0.0
cnt = 0
for i in range(n):
    cnt += 1
    v, p = map(int, input().split())
    sum_ += v * p
    # print(sum_)
    if sum_ > x * 100:
        print(cnt)
        exit()

print(-1)