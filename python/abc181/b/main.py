n = int(input())
sum_ = 0
for i in range(n):
    a, b = map(int, input().split())
    sum_ += ((a + b) * (b - a + 1)) / 2

print(int(sum_))