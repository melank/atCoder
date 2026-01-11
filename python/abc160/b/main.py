x = int(input())
# 500 : 1000円 -> 2000

if x < 500:
    print(x // 5 * 5)
    exit()

if x %500 == 0:
    print(x // 500 * 1000)
    exit()

print((x // 500 * 1000) + ((x % 500) // 5 * 5))