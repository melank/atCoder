n = int(input())
if n == 1:
    print(1)
    exit()
result = []
result.append(2)
result.append(1)
while(True):
    i = len(result) - 1
    result.append(result[i] + result[i - 1])
    if i >= n:
        break
print(result[n])