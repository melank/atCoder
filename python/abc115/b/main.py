n = int(input())
prices = [0] * n
for i in range(n):
    prices[i] = int(input())
print(sum(prices) - (max(prices) // 2))