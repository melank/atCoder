n = int(input())
sum_ = 0
for i in range(1, n + 1):
    if i %3 != 0 and i % 5 != 0:
        sum_ += i
print(sum_)