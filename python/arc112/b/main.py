b, c = map(int, input().split())
total = 0
if c == 1 or c == 2:
    print(3)
    exit()

kaisu, amari = divmod(c, 2)
# print(kaisu, amari)
# if b > 0:
#     print(2 * (kaisu + b))
# else:
#     print(2 * (kaisu + -b))

# 0 ~ b を加算する
lower = b - c // 2
upper = b
if 0 < lower or upper < 0:
    total += 2 * kaisu
    print(total + abs(b) * 2)
    exit()

if lower <= 0 <= upper:
    total += 2 * kaisu + abs(b) * 2
    print(total)
    exit()

if upper > 0:
    total -= min(-lower - upper, 0)

print(total)