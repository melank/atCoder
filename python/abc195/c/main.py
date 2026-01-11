n = int(input())

result = 0

if n >= 1000: result += n - 999
if n >= 1000000: result += n - 999999
if n >= 1000000000: result += n - 999999999
if n >= 1000000000000: result += n - 999999999999
if n >= 1000000000000000: result += n - 999999999999999

print(result)