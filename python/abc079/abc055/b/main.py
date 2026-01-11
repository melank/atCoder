n = int(input())
result = 1
for i in range(2, n+1):
    result = (result * i) % int(10**9 + 7)
print(result)