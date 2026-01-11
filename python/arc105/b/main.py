# ユークリッド互除法
def gcd(a, b):
    if b == 0:
        return a
    else:
        return gcd(b, a % b)

# 配列内の値の最大公約数を求める
def gcd_list(values):
    size = len(values)
    result = values[0]
    for i in range(size):
        result = gcd(result, values[i])
    return result

n = int(input())
cards = list(map(int, input().split()))

print(gcd_list(cards))