values = sorted(list(map(int, input().split())))

# print(values)
## odd + odd or even + even
if  (values[0] %2 == 0 and values[1] %2 == 0) or (values[0] %2 != 0 and values[1] %2 != 0):
    first = values[2] - values[1]
    print(first + (values[2] - (values[0] + first)) // 2)
# even + odd
elif (values[0] %2 == 0 and values[1] %2 != 0) or (values[1] %2 == 0 and values[1] %2 == 0):
    values[0] += 1
    values[2] += 1
    first = values[2] - values[1]
    print(first + (values[2] - (values[0] + first)) // 2 + 1)