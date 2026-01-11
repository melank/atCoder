a, b, c, x, y = map(int, input().split())
price = 0
# min(x, y)枚は、A + Bと2Cを比較して安い方を購入する
price = min(x, y) * min(a + b, 2 * c)
# print(price)


# 残りの枚数は、最安の方法で購入する
res = abs(x - y)
if x > y:
    price += min(res * a, res * 2 * c)
else:
    price += min(res * b, res * 2 * c)
print(price)