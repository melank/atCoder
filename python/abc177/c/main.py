mod_ = 1000000007
n = int(input())
values = list(map(int, input().split()))
diffs = [0]
for i in range(n):
    diffs.append(diffs[i] + values[i])

result = 0
sum_ = 0
for i in range(n):
    sum_ = (diffs[n] - diffs[i + 1]) % mod_
    result += values[i] * sum_
    result %= mod_

print(result)