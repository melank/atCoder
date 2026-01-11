n = int(input())
a = list(map(int, input().split()))
rates = [0] * 9
for rate in a:
    index = min(rate//400, 8)
    rates[index] += 1
total = 0
for i in range(len(rates) - 1):
    if rates[i] > 0:
        total += 1
print(max(total, 1), total + rates[8])