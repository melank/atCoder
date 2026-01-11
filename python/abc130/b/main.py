n, x = map(int, input().split())
result = [0]
l = list(map(int, input().split()))
total = 0
# print(l)
for c in l :
    total += c
    result.append(total)
print(len(list(filter(lambda v: v <= x, result))))